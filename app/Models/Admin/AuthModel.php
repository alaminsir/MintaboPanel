<?php

namespace App\Models\Admin;

use Codeigniter\Model;

class AuthModel extends AdminBaseModel
{
    protected $builder;
    protected $builderRoles;

    public function __construct()
    {
        parent::__construct();
        $this->builder = $this->db->table('admins');
        $this->builderRoles = $this->db->table('roles_permissions');
    }

    //input Values
    public function inputValues() : array 
    {
        return[
            'username' => inputPost('username'),
            'email'    => inputPost('email'),
            'password'    => inputPost('password')
        ];    
    }

    // login
    public function login()
    {
        $data = $this->inputValues();
        $user = $this->getUserByEmail($data['email']);
        if (!empty($user)) {
            if (!password_verify($data['password'], $user->password)) {
                return false;
            }
            // if ($user->status == 0) {
            //     return 'banned';
            // }
            $this->loginUser($user);
            return "success";
        }
        return false;
    }
    //login user
    public function loginUser($user)
    {
        if (!empty($user)) {
            $userData = array(
                'min_ses_id' => $user->id,
                'min_ses_role_id' => $user->role_id,
                'min_ses_pass' => md5($user->password ?? '')
            );
            $this->session->set($userData);
        }
    }




    //logout
    public function logout()
    {
        $this->session->remove('min_ses_id');
        $this->session->remove('min_ses_role_id');
        $this->session->remove('min_ses_pass');
    }


































    //get user by email
    public function getUserByEmail($email)
    {
        return $this->builder->where('email', removeForbiddenCharacters($email))->get()->getRow();
    }



    //update last seen time
    public function updateLastSeen()
    {
        if (authCheck()) {
            $this->builder->where('id', user()->id)->update(['last_seen' => date('Y-m-d H:i:s')]);
        }
    }



}

<?php

namespace App\Models;

use Codeigniter\Model;

class AuthModel extends BaseModel
{
    protected $builder;
    protected $builderRoles;

    public function __construct()
    {
        parent::__construct();
        $this->builder = $this->db->table();
        $this->builderRoles = $this->db->table();
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
            if ($user->status == 0) {
                return 'banned';
            }
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
                'min_ses_role' => $user->role,
                'min_ses_pass' => md5($user->password ?? '')
            );
            $this->session->set($userData);
        }
    }






































    //get user by email
    public function getUserByEmail($email)
    {
        return $this->builder->where('email', removeForbiddenCharacters($email))->get()->getRow();
    }







}

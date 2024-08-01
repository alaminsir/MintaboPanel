<?php

namespace App\Controllers\Admin;

use App\Models\Admin\AuthModel;
use Config\Globals;
class Auth extends AdminBaseController
{
    public $authModel;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->session = \Config\Services::session();

        $this->authModel = new AuthModel();
    }

    public function index()
    {
        // if (authCheck()) {
        //     return redirect()->to(adminUrl());
        // }
        $data['title'] = trans("login");


        // return view('admin/includes/_header', $data)
        // . view('admin/index', $data)
        // . view('admin/includes/_footer');
        // echo "Admin Login Page";
        return view('admin/login',$data);
    }

    public function loginPost()
     {
        $val = \Config\Services::validation();
        $val->setRule('email', trans("email"), 'required|max_length[200]');
        $val->setRule('password', trans("password"), 'required|max_length[200]');
        if (!$this->validate(getValRules($val))) {
            $this->session->setFlashdata('errors', $val->getErrors());
            return redirect()->back()->withInput();
        }else{
            $authModel = new AuthModel();
            $user = $authModel->getUserByEmail(inputPost('email'));
            // if (!empty($user) && $user->role != 'admin' && $this->generalSettings->maintenance_mode_status == 1) {
            //     $this->session->setFlashdata('error', "Site under construction! Please try again later.");
            //     return redirect()->to(adminUrl('login'));
            // }
            if ($authModel->login() == 'success') {
                return redirect()->to(adminUrl());
            } else {
                $this->session->setFlashdata('error', trans("login_error"));
                return redirect()->to(adminUrl('login'));
            }

        }     
    }
    /**
     * Logout
     */
    public function logout()
    {
        $this->authModel->logout();
        redirectToBackUrl();
    }
}
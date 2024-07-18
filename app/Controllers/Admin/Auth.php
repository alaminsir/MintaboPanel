<?php

namespace App\Controllers\Admin;

use App\Models\Admin\AuthModel;

class Auth extends AdminBaseController
{
    public function index()
    {
        if (authCheck()) {
            return redirect()->to(langBaseUrl());
        }
        // $data['title'] = trans("navigation");


        // return view('admin/includes/_header', $data)
        // . view('admin/index', $data)
        // . view('admin/includes/_footer');
        // echo "Admin Login Page";
        return view('admin/login');
    }

    public function loginPost()
     {
        return redirect()->to(adminUrl());  
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
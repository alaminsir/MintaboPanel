<?php

namespace App\Controllers\Admin;

class Auth extends AdminBaseController
{
    public function index()
    {
        // $data['title'] = trans("navigation");


        // return view('admin/includes/_header', $data)
        // . view('admin/index', $data)
        // . view('admin/includes/_footer');
        // echo "Admin Login Page";
        return view('admin/login');
    }
}
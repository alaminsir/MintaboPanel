<?php

namespace App\Controllers\Web;

// use App\Models\AuthModel;
// use App\Models\CategoryModel;
// use App\Models\EmailModel;
// use App\Models\NewsletterModel;

class Auth extends WebBaseController
{


    public function index()
    {
        // echo view('market/partials/_header');
        echo view('market/auth/register');
        echo view('market/partials/_footer');
        // return "Login Page";
        
    }





}
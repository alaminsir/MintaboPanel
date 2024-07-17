<?php

namespace App\Controllers\Web;

use App\Models\AuthModel;
// use App\Models\CategoryModel;
// use App\Models\EmailModel;
// use App\Models\NewsletterModel;
// use Config\Globals;
// use CodeIgniter\Controller;

class Auth extends WebBaseController
{


    public function index()
    {

        if (authCheck()) {
            return redirect()->to(langBaseUrl());
        }
        $data['title'] = trans("login");
        $data['description'] = trans("login");
        $data['keywords'] = trans("login");
        
        // var_dump($data);
        
        echo themeView('partials/_header', $data);
        echo themeView('auth/index');
        echo themeView('partials/_footer');
        
    }

    public function loginPost()
     {
        if (authCheck()) {
            return redirect()->to(langBaseUrl());
        }
        $val = \Config\Services::validation();
        $val->setRule('email', trans("email"), 'required|max_length[255]');
        $val->setRule('password', trans("password"), 'required|max_length[255]');
        if (!$this->validate(getValRules($val))) {
            $this->session->setFlashdata('errors', $val->getErrors());
            echo loadView('partials/_messages');
        } else {
            $model = new AuthModel();
            $result = $model->login();
        }        
    }
    /**
     * Register
     */
    public function register()
    {
        if ($this->generalSettings->registration_system != 1 || authCheck()) {
            return redirect()->to(langBaseUrl());
        }

        $data['title'] = trans("register");
        $data['description'] = trans("register");
        $data['keywords'] = trans("register");
        
        // var_dump($data);
        
        echo themeView('partials/_header', $data);
        echo themeView('auth/register');
        echo themeView('partials/_footer');
    }





}
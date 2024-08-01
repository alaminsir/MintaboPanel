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
    public $authModel;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->authModel = new AuthModel();
    }

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
        //check auth
        if (authCheck()) {
            return redirect()->to(langBaseUrl());
        }
        $val = \Config\Services::validation();
        $val->setRule('email', trans("email_address"), 'required|max_length[255]');
        $val->setRule('password', trans("password"), 'required|max_length[255]');
        if (!$this->validate(getValRules($val))) {
            $this->session->setFlashdata('errors', $val->getErrors());
            // echo themeView('partials/_messages');
            // echo themeView('partials/_messages');
        } else {
            if ($this->authModel->login()) {
                return redirect()->to(langBaseUrl());
                // echo json_encode(['result' => 1]);
            } else {
                $data = [
                    'result' => 0,
                    'errorMessage' => view('partials/_messages')
                ];
                echo json_encode($data);
            }
            resetFlashData();
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
    /**
     * Register Post
     */
    public function registerPost()
    {
        if (authCheck()) {
            return redirect()->to(langBaseUrl());
        }
        // if ($this->baseVars->recaptchaStatus) {
        //     if (reCAPTCHA('validate') == 'invalid') {
        //         setErrorMessage(trans("msg_recaptcha"));
        //         return redirect()->to(generateUrl('register'));
        //     }
        // }
        $val = \Config\Services::validation();
        $val->setRule('email', trans("email_address"), 'required|max_length[255]');
        $val->setRule('password', trans("password"), 'required|min_length[4]|max_length[255]');
        $val->setRule('confirm_password', trans("password_confirm"), 'required|matches[password]');
        if (!$this->validate(getValRules($val))) {
            $this->session->setFlashdata('errors', $val->getErrors());
            return redirect()->to(generateUrl('register'))->withInput();
        } else {
            $email = inputPost('email');
            if (!$this->authModel->isEmailUnique($email)) {
                setErrorMessage(trans("msg_email_unique_error"));
                return redirect()->to(generateUrl('register'))->withInput();
            }
            if ($this->authModel->register()) {
                setSuccessMessage(trans("msg_register_success"));
                return redirect()->to(generateUrl('settings', 'edit_profile'));
            }
        }
        setErrorMessage(trans("msg_error"));
        return redirect()->to(generateUrl('register'));
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
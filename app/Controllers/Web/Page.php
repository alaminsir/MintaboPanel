<?php

namespace App\Controllers\Web;

use App\Models\PageModel;

// use CodeIgniter\Controller;
use Config\Globals;


class Page extends WebBaseController
{
    public $pageModel;
    protected $helpers = ['app'];

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->pageModel = new PageModel();
    }

    public function contact(){
        $page = $this->pageModel->getPageByDefaultName('contact',selectedLangId());
        if(empty($page)){
            return redirect()->to(langBaseUrl());
        }
        if($page->visibility == 0){
            $this->error404();
        }else{
        $data['title'] = $page->title;
        $data['description'] = $page->description;
        $data['keywords'] = $page->keywords;
        $data['page'] = $page;
        echo themeView('partials/_header',$data);
        echo themeView('pages/contact');
        echo themeView('partials/_footer');
        }

    }

        /**
     * Contact Page Post
     */
    public function contactPost()
    {
        $contactUrl = inputPost('contact_url');
        if (!empty($contactUrl)) {
            exit();
        }
        $val = \Config\Services::validation();
        $val->setRule('name', trans("name"), 'required|max_length[200]');
        $val->setRule('email', trans("email_address"), 'required|max_length[200]');
        $val->setRule('message', trans("message"), 'required|max_length[5000]');
        if (!$this->validate(getValRules($val))) {
            $this->session->setFlashdata('errors', $val->getErrors());
            return redirect()->back()->withInput();
        } else {
            if (reCAPTCHA('validate') == 'invalid') {
                setErrorMessage(trans("msg_recaptcha"));
                return redirect()->back()->withInput();
            } else {
                if ($this->commonModel->addContactMessage()) {
                    setSuccessMessage(trans("msg_contact_success"));
                    return redirect()->to(generateUrl('contact'));
                } else {
                    setErrorMessage(trans("msg_contact_error"));
                    return redirect()->back()->withInput();
                }
            }
        }
    }
    /**
     * Terms & Conditions
     */
    public function termsConditions()
    {
        $page = $this->pageModel->getPageByDefaultName('terms_conditions', selectedLangId());
        if (empty($page)) {
            return redirect()->to(langBaseUrl());
        }
        if ($page->visibility == 0) {
            $this->error404();
        } else {
            $data['title'] = $page->title;
            $data['description'] = $page->description;
            $data['keywords'] = $page->keywords;
            $data['page'] = $page;

            echo themeView('partials/_header', $data);
            echo themeView('pages/page', $data);
            echo themeView('partials/_footer');
        }
    } 
    /**
     * Dynamic Page by Name Slug
     */
    public function any($slug)
    {
        if (empty($slug)) {
            return redirect()->to(langBaseUrl());
        }
        // $pageModel = new PageModel();
         $page = $pageModel->getPageByLang($slug, $this->activeLang->id);
        
        if (!empty($page)) {
            $this->page($page);
        }
        //  else {
        //     $this->error404();
        // }
    }
    private function page($page)
    {
        if (empty($page)) {
            return redirect()->to(langBaseUrl());
        }
        if($page->visibility == 0 || !empty($page->page_default_name)){
            $this->error404();
        }else{
            $data['title'] = $page->title;
            $data['description'] = $page->description;
            $data['keywords'] = $page->keywords;
            $data['page'] = $page;

            echo themeView('partials/_header', $data);
            echo themeView('pages/page', $data);
            echo themeView('partials/_footer'); 
        }


    }


        //error 404
        public function error404()
        {
            // echo "404 page";
            header("HTTP/1.0 404 Not Found");
            // $data['title'] = $this->settings->home_title;
            // $data['description'] = $this->settings->site_description;
            // $data['keywords'] = $this->settings->keywords;
            // $data['homeTitle'] = $this->settings->home_title;
            // $data['isPage404'] = true;
    
            // return themeView('partials/_header', $data)
            // . themeView('errors/html/error_404')
            // . themeView('partials/_footer', $data);
            // echo themeView('partials/_header');
            echo View('errors/html/error_404');
            // echo themeView('partials/_footer');
        }









    
}
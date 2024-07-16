<?php

namespace App\Controllers\Web;

use App\Models\PageModel;


use Config\Globals;


class Home extends WebBaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        // $this->postsPerPage = $this->generalSettings->pagination_per_page;
    }
    public function index()
    {
        $data['title'] = $this->settings->home_title;
        $data['description'] = $this->settings->site_description;
        $data['keywords'] = $this->settings->keywords;
        $data['homeTitle'] = $this->settings->home_title;


        //  
        echo themeView('partials/_header',$data);
        echo themeView('index',$data);
           echo themeView('partials/_footer');
    }


    /**
     * Dynamic Page by Name Slug
     */
    public function any($slug)
    {
        if (empty($slug)) {
            return redirect()->to(langBaseUrl());
        }
        $pageModel = new PageModel();
         $page = $pageModel->getPageByLang($slug, $this->activeLang->id);
        
        if (!empty($page)) {
            $this->page($page);
        } else {
            $this->error404();
        }
    }
    private function page($page)
    {
        if (empty($page)) {
            return redirect()->to(langBaseUrl());
        }
        // if($page->visibility == 0){
        //     $this->error404();
        // }else{
        //     $data['title'] = $page->title;
        //     $data['description'] = $page->description;
        //     $data['keywords'] = $page->keywords;
        //     $data['page'] = $page;
        //     if ($page->page_default_name == 'gallery') {
        //         $this->gallery($page, $data);
        //     } elseif ($page->page_default_name == 'contact') {
        //         echo themeView('partials/_header', $data);
        //         echo themeView('contact', $data);
        //         echo themeView('partials/_footer');
        //     } else {
        //         echo themeView('partials/_header', $data);
        //         echo themeView('page', $data);
        //         echo themeView('partials/_footer');
        //     }
        // }
            $data['title'] = $page->title;
            $data['description'] = $page->description;
            $data['keywords'] = $page->keywords;
            $data['page'] = $page;
                echo themeView('partials/_header', $data);
                echo themeView('hosting/shared', $data);
                echo themeView('partials/_footer');

    }
        /**
     * Subcategory
     */
    public function subPage($parentSlug, $slug)
    {
        $pageModel = new PageModel();
        $pageParent = $pageModel->getCategoryBySlug($parentSlug);
        $page = $pageModel->getCategoryBySlug($slug);
        if (empty($categoryParent) || empty($category)) {
            return redirect()->to(langBaseUrl());
        }
        $this->page($category, false);
    }
        //error 404
        public function error404()
        {
            // echo "404 page";
            // header("HTTP/1.0 404 Not Found");
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

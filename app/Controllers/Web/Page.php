<?php

namespace App\Controllers\Web;

use App\Models\PageModel;

// use CodeIgniter\Controller;
use Config\Globals;


class Page extends WebBaseController
{
    public function contact(){
        $data['title'] = trans("login");
        $data['description'] = trans("login");
        $data['keywords'] = trans("login");

        echo themeView('partials/_header',$data);
        echo themeView('pages/contact');
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
        if($page->visibility == 0){
            $this->error404();
        }else{
            // if($page->page_default_name == 'hosting'){
            //     // return redirect()->to(generateUrl('select_membership_plan'));
            //     // return redirect()->to(langBaseUrl($page->slug));
            //     echo $page->slug;
            // }
            echo "page";
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
            // $data['title'] = $page->title;
            // $data['description'] = $page->description;
            // $data['keywords'] = $page->keywords;
            // $data['page'] = $page;
            //     echo themeView('partials/_header', $data);
            //     echo themeView('hosting/shared', $data);
            //     echo themeView('partials/_footer');


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
<?php

namespace App\Controllers\Web;

use App\Models\PageModel;
use App\Models\Hosting\HostingModel;

use Config\Globals;


class Hosting extends WebBaseController
{
    public $pageModel;
    public $hostingModel;
    protected $hostingPerPage;
    protected $helpers = ['app'];

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->hostingModel = new HostingModel();
        $this->pageModel = new PageModel();
        $this->hostingPerPage = 3;
    }
    public function index()
    {
        $pageModel = new PageModel();
        $page = $pageModel->getPageByDefaultName('hosting', $this->activeLang->id);
        // var_dump($page);
        // $page = $this->pageModel->getPageByDefaultName('hosting', $this->activeLang->id);
        if (empty($page)) {
            return redirect()->to(langBaseUrl());
        }
        if ($page->visibility == 0) {
            $this->error404();
        } else {
            $data['title'] = $page->title;
            $data['description'] = $page->description;
            $data['keywords'] = $page->keywords;
            $data["activeCategory"] = 'all';
            
            // $numRows = $this->blogModel->getPostCount();
            // $data['pager'] = paginate($this->blogPerPage, $numRows);
            // $data['posts'] = $this->blogModel->getPostsPaginated($this->blogPerPage, $data['pager']->offset);
            // $data['categories'] = $this->blogModel->getCategoriesByLang(selectedLangId());

            echo themeView('partials/_header', $data);
            echo themeView('hosting/index', $data);
            echo themeView('partials/_footer');
        }

    }
    
        /**
     * Blog Category
     */
    public function category($slug)
    {
        // echo $slug;
        $data['category'] = $this->hostingModel->getCategoryBySlug($slug);
        if (empty($data['category'])) {
            return redirect()->to(generateUrl('hosting'));
        }
        $data['title'] = $data['category']->name;
        $data['description'] = $data['category']->description;
        $data['keywords'] = $data['category']->keywords;
        $data["activeCategory"] = $data['category']->slug;
        
        $numRows = $this->hostingModel->getPostCountByCategory($data['category']->id);
         $data['pager'] = paginate($this->hostingPerPage, $numRows);
         $data['hosting_plans'] = $this->hostingModel->getCategoryPostsPaginated($data['category']->id, $this->hostingPerPage, $data['pager']->offset);
        // $data['categories'] = $this->hostingModel->getCategoriesByLang(selectedLangId());
// print_r($data);
        echo themeView('partials/_header', $data);
        echo themeView('hosting/'.$slug, $data);
        echo themeView('partials/_footer');
    }











    
}
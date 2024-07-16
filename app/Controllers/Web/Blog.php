<?php

namespace App\Controllers\Web;

// use CodeIgniter\Controller;
use Config\Globals;


class Blog extends WebBaseController
{

    public function index()
    {
        $page = $this->pageModel->getPageByDefaultName('blog', selectedLangId());
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
            
            $numRows = $this->blogModel->getPostCount();
            $data['pager'] = paginate($this->blogPerPage, $numRows);
            $data['posts'] = $this->blogModel->getPostsPaginated($this->blogPerPage, $data['pager']->offset);
            $data['categories'] = $this->blogModel->getCategoriesByLang(selectedLangId());

            echo view('partials/_header', $data);
            echo view('blog/index', $data);
            echo view('partials/_footer');
        }
    }
        /**
     * Blog Category
     */
    public function blogCategory($slug)
    {
        $data['category'] = $this->blogModel->getCategoryBySlug($slug);
        if (empty($data['category'])) {
            return redirect()->to(generateUrl('blog'));
        }
        $data['title'] = $data['category']->name;
        $data['description'] = $data['category']->description;
        $data['keywords'] = $data['category']->keywords;
        $data["activeCategory"] = $data['category']->slug;
        
        $numRows = $this->blogModel->getPostCountByCategory($data['category']->id);
        $data['pager'] = paginate($this->blogPerPage, $numRows);
        $data['posts'] = $this->blogModel->getCategoryPostsPaginated($data['category']->id, $this->blogPerPage, $data['pager']->offset);
        $data['categories'] = $this->blogModel->getCategoriesByLang(selectedLangId());

        echo view('partials/_header', $data);
        echo view('blog/index', $data);
        echo view('partials/_footer');
    }











    
}
<?php

namespace App\Controllers\Web;

use App\Models\PageModel;
use App\Models\BlogModel;
use Config\Globals;


class Blog extends WebBaseController
{
    public $pageModel;
    protected $blogModel;
    protected $commentLimit;
    protected $blogPerPage;
    protected $helpers = ['app'];

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->blogModel = new BlogModel();
        $this->commentLimit = 6;
        $this->blogPerPage = 12;
        $this->pageModel = new PageModel();
    }
    public function index()
    {
        // $pageModel = new PageModel();
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

            echo themeView('partials/_header', $data);
            echo themeView('blog/index', $data);
            echo themeView('partials/_footer');
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

        echo themeView('partials/_header', $data);
        echo themeView('blog/index', $data);
        echo themeView('partials/_footer');
    }

    /**
     * Tag
     */
    public function tag($tagSlug)
    {
        $data['tag'] = $this->blogModel->getPostTag($tagSlug);
        if (empty($data['tag'])) {
            return redirect()->to(generateUrl('blog'));
        }
        $data['title'] = $data['tag']->tag;
        $data['description'] = trans("tag") . ': ' . $data['tag']->tag . ' - ' . $this->baseVars->appName;
        $data['keywords'] = trans("tag") . ',' . $data['tag']->tag . ',' . $this->baseVars->appName;
        $numRows = $this->blogModel->getTagPostsCount($tagSlug);
        $data['pager'] = paginate($this->blogPerPage, $numRows);
        $data['posts'] = $this->blogModel->getTagPostsPaginated($tagSlug, $this->blogPerPage, $data['pager']->offset);

        echo themeView('partials/_header', $data);
        echo themeView('blog/tag', $data);
        echo themeView('partials/_footer');
    }

    /**
     * Post
     */
    public function post($category_slug, $slug)
    {
        $data['post'] = $this->blogModel->getPostBySlug($slug);
        if (empty($data['post'])) {
            return redirect()->to(generateUrl('blog'));
        }
        $data['title'] = $data['post']->title;
        $data['description'] = $data['post']->summary;
        $data['keywords'] = $data['post']->keywords;
        $data['relatedPosts'] = $this->blogModel->getRelatedPosts($data['post']->category_id, $data['post']->id);
        $data['latestPosts'] = $this->blogModel->getPostsPaginated(3, 0);
        $data['randomTags'] = $this->blogModel->getRandomPostTags();
        $data['postTags'] = $this->blogModel->getPostTags($data['post']->id);
        $data['comments'] = $this->blogModel->getCommentsByPostId($data['post']->id, $this->commentLimit);
        $data['commentsCount'] = $this->blogModel->getCommentCount($data['post']->id);
        $data['commentLimit'] = $this->commentLimit;
        // $data['postUser'] = getUser($data['post']->user_id);
        $data["category"] = $this->blogModel->getCategory($data['post']->category_id);
        //og tags
        $data['showOgTags'] = true;
        $data['ogTitle'] = $data['post']->title;
        $data['ogDescription'] = $data['post']->summary;
        $data['ogType'] = 'article';
        $data['ogUrl'] = generateUrl('blog') . '/' . $data['post']->category_slug . '/' . $data['post']->slug;
        $data['ogImage'] = getBlogImageURL($data['post'], 'image_default');
        $data['ogWidth'] = '750';
        $data['ogHeight'] = '500';
        $data['ogCreator'] = '';
        $data['ogAuthor'] = '';
        if (!empty($data['postUser'])) {
            $data['ogCreator'] = getUsername($data['postUser']);
            $data['ogAuthor'] = getUsername($data['postUser']);
        }
        $data['ogPublishedTime'] = $data['post']->created_at;
        $data['ogModifiedTime'] = $data['post']->created_at;
        $data['ogTags'] = $data['postTags'];

        echo themeView('partials/_header', $data);
        echo themeView('blog/post', $data);
        echo themeView('partials/_footer');
    }









    
}
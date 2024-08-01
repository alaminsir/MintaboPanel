<?php

namespace App\Controllers\Admin;

use App\Models\PageModel;
use App\Models\LanguageModel;
use App\Models\SettingsModel;
use App\Models\SitemapModel;
class Admin extends AdminBaseController
{

    // protected $postAdminModel;
    public $settingsModel;
    protected $pageModel;
    public $authModel;
    // protected $commonModel;
    // protected $newsletterModel;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        // $this->postAdminModel = new PostAdminModel();
        $this->settingsModel = new SettingsModel();
        $this->pageModel = new PageModel();
        // $this->authModel = new AuthModel();
        // $this->commonModel = new CommonModel();
        // $this->newsletterModel = new NewsletterModel();

        // if (checkCronTime(1)) {
        //     //delete old posts
        //     $this->postAdminModel->deleteOldPosts();
        //     //delete old page views
        //     $postModel = new PostModel();
        //     $postModel->deleteOldPageviews();
        //     //delete old sessions
        //     $this->settingsModel->deleteOldSessions();
        //     //update cron time
        //     $this->settingsModel->setLastCronUpdate();
        // }
    }

    public function index()
    {
        // $this->home_dash();
        return redirect()->to(adminUrl('home-dash'));
    }
    public function home_dash()
    {
        $data['title'] = trans("admin_panel");

        echo view('admin/includes/_header', $data);
        echo view('admin/dashboard/index', $data);
        echo view('admin/includes/_footer');
    }
    public function ecom_dash()
    {
        $data['title'] = trans("admin_panel");

        echo view('admin/includes/_header', $data);
        echo view('admin/dashboard/index', $data);
        echo view('admin/includes/_footer');
    }
    public function domain_dash()
    {
        $data['title'] = trans("admin_panel");

        echo view('admin/includes/_header', $data);
        echo view('admin/dashboard/domain', $data);
        echo view('admin/includes/_footer');
    }
    public function host_dash()
    {
        $data['title'] = trans("admin_panel");

        echo view('admin/includes/_header', $data);
        echo view('admin/dashboard/index', $data);
        echo view('admin/includes/_footer');
    }
    /*
    * Navigation
    */
    public function navigation()
    {
        // checkPermission('navigation');
        $data['title'] = trans("navigation");

        echo view('admin/includes/_header', $data);
        echo view('admin/navigation', $data);
        echo view('admin/includes/_footer');
    }
    /**
     * Navigation Post
     */
    public function navigationPost()
    {
        checkPermission('navigation');
        if ($this->settingsModel->editNavigation()) {
            setSuccessMessage(trans("msg_updated"));
        } else {
            setErrorMessage(trans("msg_error"));
        }
        return redirect()->back();
    }
    /**
     * Themes
     */
    public function themes()
    {
        // checkAdmin();
        $data['title'] = trans("themes");
        $data['themes'] = $this->settingsModel->getThemes();

   
        echo view('admin/includes/_header', $data);
        echo view('admin/themes', $data);
        echo view('admin/includes/_footer');
    }
    /**
     * Set Theme Post
     */
    public function setThemePost()
    {
        // checkAdmin();
        $this->settingsModel->setTheme();
        return redirect()->to(adminUrl('themes'));
    }
    /*
    * Slider
    */
    public function slider()
    {
        // checkPermission('slider');
        $data['title'] = trans("slider_items");
        // $data['sliderItems'] = $this->commonModel->getSliderItems();
        // $data['langSearchColumn'] = 3;
        
        echo view('admin/includes/_header', $data);
        echo view('admin/slider/slider', $data);
        echo view('admin/includes/_footer');
    }








    /*
     * --------------------------------------------------------------------
     * Pages
     * --------------------------------------------------------------------
     */

    /**
     * Pages
     */
    public function pages()
    {
        // checkPermission('pages');
        $data['title'] = trans("pages");
        $data['pages'] = $this->pageModel->getPages();
        $data['langSearchColumn'] = 2;
        
        echo view('admin/includes/_header', $data);
        echo view('admin/page/pages', $data);
        echo view('admin/includes/_footer');
    }
    /**
     * Add Page
     */
    public function addPage()
    {
        // checkPermission('pages');
        $data['title'] = trans("add_page");
        echo view('admin/includes/_header', $data);
        echo view('admin/page/add', $data);
        echo view('admin/includes/_footer');
    }


    /**
     * Add Page Post
     */
    public function addPagePost()
    {
        checkPermission('pages');
        $val = \Config\Services::validation();
        $val->setRule('title', trans("title"), 'required|max_length[500]');
        if (!$this->validate(getValRules($val))) {
            $this->session->setFlashdata('errors', $val->getErrors());
            return redirect()->back()->withInput();
        } else {
            if ($this->pageModel->addPage()) {
                setSuccessMessage(trans("msg_added"));
                return redirect()->back();
            }
        }
        setErrorMessage(trans("msg_error"));
        return redirect()->back()->withInput();
    }

    /**
     * Edit Page
     */
    public function editPage($id)
    {
        checkPermission('pages');
        $data['title'] = trans("update_page");
        $data['page'] = $this->pageModel->getPageById($id);
        if (empty($data['page'])) {
            return redirect()->to(adminUrl('pages'));
        }
        echo view('admin/includes/_header', $data);
        echo view('admin/page/edit', $data);
        echo view('admin/includes/_footer');
    }

    /**
     * Edit Page Post
     */
    public function editPagePost()
    {
        checkPermission('pages');
        $val = \Config\Services::validation();
        $val->setRule('title', trans("title"), 'required|max_length[500]');
        if (!$this->validate(getValRules($val))) {
            $this->session->setFlashdata('errors', $val->getErrors());
            return redirect()->back()->withInput();
        } else {
            $id = inputPost('id');
            $redirectUrl = inputPost('redirect_url');
            if ($this->pageModel->editPage($id)) {
                setSuccessMessage(trans("msg_updated"));
                if (!empty($redirectUrl)) {
                    return redirect()->to($redirectUrl);
                }
                return redirect()->to(adminUrl('pages'));
            }
        }
        setErrorMessage(trans("msg_error"));
        return redirect()->back()->withInput();
    }

    /**
     * Delete Page Post
     */
    public function deletePagePost()
    {
        checkPermission('pages');
        $id = inputPost('id');
        $page = $this->pageModel->getPageById($id);
        if (!empty($page) && $page->is_custom == 1) {
            if ($this->pageModel->deletePage($id)) {
                setSuccessMessage(trans("msg_deleted"));
            } else {
                setErrorMessage(trans("msg_error"));
            }
        }
    }

    /*
     * --------------------------------------------------------------------
     * Newsletter
     * --------------------------------------------------------------------
     */

    /**
     * Newsletter
     */
    public function newsletter()
    {
        // checkPermission('newsletter');
        $data['title'] = trans("newsletter");
        
        $data['subscribers'] = $this->newsletterModel->getSubscribers();
        $data['users'] = $this->authModel->getUsers();

        echo view('admin/includes/_header', $data);
        echo view('admin/newsletter/newsletter', $data);
        echo view('admin/includes/_footer');
    }













        /*
     * General Settings Settings
     */
    public function generalSettings()
    {
        // checkPermission('general_settings');
        $data['title'] = trans("general_settings");
        
        $data['settingsLang'] = inputGet('lang');
        if (empty($data['settingsLang'])) {
            $data['settingsLang'] = selectedLangId();
            return redirect()->to(adminUrl('general-settings?lang=' . $data['settingsLang']));
        }
        $data['settings'] = $this->settingsModel->getSettings($data['settingsLang']);

        echo view('admin/includes/_header', $data);
        echo view('admin/settings/general_settings', $data);
        echo view('admin/includes/_footer');
    }

        /*
    * Route Settings
    */
    public function routeSettings()
    {
        // checkPermission('system_settings');
        $data['title'] = trans("route_settings");
        $data['routes'] = $this->settingsModel->getRoutes();

        echo view('admin/includes/_header', $data);
        echo view('admin/settings/route_settings', $data);
        echo view('admin/includes/_footer');
    }

}
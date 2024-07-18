<?php

namespace App\Controllers\Web;

use App\Models\PageModel;





use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Globals;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class WebBaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [ 
        'text', 'cookie', 'security', 'xml'
    ];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    public $session;
    public $settingsModel;
    // public $commonModel;
    // public $postModel;
    public $generalSettings;
    public $settings;
    public $activeLanguages;
    public $activeTheme;
    public $activeLang;
    public $activeFonts;
    public $rtl;
    public $darkMode;
    // public $widgets;
    public $categories;
    // public $latestCategoryPosts;
    // public $adSpaces;



    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->session = \Config\Services::session();
        $this->request = \Config\Services::request();
        // $this->settingsModel = new SettingsModel();
        // $this->commonModel = new CommonModel();
        // $this->postModel = new PostModel();

        //general settings
        $this->generalSettings = Globals::$generalSettings;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            setActiveLangPostRequest();
        }

        //settings
        $this->settings = Globals::$settings;
        //active languages
        $this->activeLanguages = Globals::$languages;
        //active theme
        $this->activeTheme = Globals::$activeTheme;
        //active lang
        $this->activeLang = Globals::$activeLang;


        //maintenance mode
        if ($this->generalSettings->maintenance_mode_status == 1) {
            if (!isAdmin()) {
                //echo view('common/maintenance', ['generalSettings' => $this->generalSettings, 'baseSettings' => $this->settings]);
            }
        }
    



        // rtl
        $this->rtl = false;
        if ($this->activeLang->text_direction == 'rtl') {
            $this->rtl = true;
        }
        $this->darkMode = Globals::$darkMode;



    

        //menu links
        $menuLinks = getCachedData('menu_links');
        if (empty($menuLinks)) {
            $pageModel = new PageModel();
            $menuLinks = $pageModel->getMenuLinks($this->activeLang->id);
            setCacheData('menu_links', $menuLinks);
        }






        updateLastSeen();


            //view variables
        $view = \Config\Services::renderer();


        $view->setData([
            'assetsPath' => 'assets/' . getThemePath(),
            'activeTheme' => $this->activeTheme,
            'activeLang' => $this->activeLang,
            'generalSettings' => $this->generalSettings,
            'baseSettings' => $this->settings,
            'activeLanguages' => $this->activeLanguages,
            'rtl' => $this->rtl,
            'darkMode' => $this->darkMode,
            'activeFonts' => $this->activeFonts,
            'baseMenuLinks' => $menuLinks,
            // 'baseWidgets' => $this->widgets,
            'baseCategories' => $this->categories,
            // 'baseLatestCategoryPosts' => $this->latestCategoryPosts,
            // 'adSpaces' => $this->adSpaces
    ]);
    
    }
}

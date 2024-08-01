<?php

namespace App\Controllers\Admin;

use App\Models\AuthModel;
use App\Models\SettingsModel;

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
abstract class AdminBaseController extends Controller
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
        'text', 'cookie','app', 'security'
    ];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;
    public $session;
    public $settingsModel;
    public $authModel;
    public $commonModel;
    public $categoryModel;
    public $fileModel;
    public $generalSettings;
    // public $paymentSettings;
    // public $productSettings;
    // public $storageSettings;
    public $settings;
    public $activeTheme;
    public $activeLanguages;
    public $activeLang;
    public $defaultCurrency;
    public $perPage;
    public $baseVars;
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

        $this->generalSettings = Globals::$generalSettings;
        //settings
        $this->settings = Globals::$settings;
        //active languages
        $this->activeLanguages = Globals::$languages;
        //active lang
        $this->activeLang = Globals::$activeLang;
        //default currency
        $this->defaultCurrency = Globals::$defaultCurrency;

        //active theme
        $this->activeTheme = getActiveTheme();

      //check auth
      if (!authCheck()) {
        redirectToUrl(adminUrl('login'));
        exit();
       }
        //check admin
        if (!isAdmin()) {
            redirectToUrl(langBaseUrl());
            exit();
        }



        //view variables
        $view = \Config\Services::renderer();
        $view->setData([
            'generalSettings' => $this->generalSettings, 
            // 'paymentSettings' => $this->paymentSettings, 
            // 'productSettings' => $this->productSettings, 
            'baseSettings' => $this->settings, 
            'activeTheme' => $this->activeTheme, 
            'activeLanguages' => $this->activeLanguages, 
            'activeLang' => $this->activeLang,
            // 'defaultCurrency' => $this->defaultCurrency, 
            // 'baseVars' => $this->baseVars
            ]);
    }
}

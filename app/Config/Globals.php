<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Globals extends BaseConfig
{
    private static $db = null;
    public static $themes = array();
    public static $activeTheme = null;
    public static $generalSettings = array();
    public static $paymentSettings = array();
    public static $productSettings = array();
    public static $storageSettings = array();
    public static $settings = array();
    public static $customRoutes = array();
    public static $languages = array();
    public static $defaultLang = array();
    public static $languageTranslations = array();
    public static $rolesPermissions = array();
    public static $activeLang = array();
    public static $langBaseUrl = "";
    public static $langSegment = '';
    public static $authCheck = false;
    public static $authUser = null;
    public static $darkMode = 0;
    public static $currencies = array();
    public static $defaultCurrency = array();
    public static $defaultLocation = array();

    public static function setGlobals()
    {
        self::$db = \Config\Database::connect();
        $session = \Config\Services::session();
        //set themes
        self::$themes = self::$db->table('themes')->get()->getResult();
        //set general settings
        self::$generalSettings = self::$db->table('general_settings')->where('id', 1)->get()->getRow();
        //set payment settings
        self::$paymentSettings = self::$db->table('payment_settings')->where('id', 1)->get()->getRow();
        //set payment settings
        self::$productSettings = self::$db->table('product_settings')->where('id', 1)->get()->getRow();
        //set storage settings
        self::$storageSettings = self::$db->table('storage_settings')->where('id', 1)->get()->getRow();
        //set routes working here
        self::$customRoutes = self::$db->table('routes')->get()->getRow();
        //set routes
        //    $routes = self::$db->table('routes')->get()->getResult();
        //    self::$customRoutes = new \stdClass();
        //    if (!empty($routes)) {
        //        foreach ($routes as $route) {
        //            $routeKey = $route->route_key;
        //            self::$customRoutes->$routeKey = $route->route;
        //        }
        //    }
        
        //set languages
        self::$languages = self::$db->table('languages')->where('status', 1)->get()->getResult();
        //set roles permissions
        self::$rolesPermissions = self::$db->table('roles_permissions')->get()->getResult();
        //set timezone
        if (!empty(self::$generalSettings->timezone)) {
            date_default_timezone_set(self::$generalSettings->timezone);
        }



        //set active theme
        if (!empty(self::$themes)) {
            foreach (self::$themes as $item) {
                if ($item->is_active == 1) {
                    self::$activeTheme = $item;
                }
            }
            if (empty(self::$activeTheme)) {
                if (!empty(self::$themes[0])) {
                    self::$activeTheme = self::$themes[0];
                }
            }
        }

        //set dark mode
        $mode = self::$generalSettings->theme_mode;
        if (!empty(helperGetCookie('theme_mode'))) {
            $mode = helperGetCookie('theme_mode');
        }
        if ($mode == 'dark') {
            self::$darkMode = 1;
        }








    }




    public static function setActiveLanguage($langId)
    {
        if (!empty(self::$languages)) {
            foreach (self::$languages as $lang) {
                if ($langId == $lang->id) {
                    self::$activeLang = $lang;
                    //set language translations
                    self::$languageTranslations = self::$db->table('language_translations')->where('lang_id', self::$activeLang->id)->get()->getResult();
                    $arrayTranslations = array();
                    if (!empty(self::$languageTranslations)) {
                        foreach (self::$languageTranslations as $item) {
                            $arrayTranslations[$item->label] = $item->translation;
                        }
                    }
                    self::$languageTranslations = $arrayTranslations;
                    self::updateLangBaseURL($lang->short_form);
                    break;
                }
            }
        }
    }


    public static function updateLangBaseURL($shortForm)
    {
        if(self::$defaultLang->short_form == $shortForm){
            self::$langBaseUrl = base_url();
        }else{
            self::$langBaseUrl = base_url($shortForm);
        }
    }
}
Globals::setGlobals();
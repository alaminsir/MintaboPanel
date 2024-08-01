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
    public static $options = array();
    public static $customRoutes = array();
    public static $languages = array();
    public static $defaultLang = array();
    public static $languageTranslations = array();
    public static $rolesPermissions = array();
    public static $activeLang = array();
    public static $langBaseUrl = '';
    public static $langSegment = '';
    public static $authCheck = false;
    public static $authStaffCheck = false;
    public static $authUser = null;
    public static $authStaff = null;
    public static $currencies = array();
    public static $defaultCurrency = array();
    public static $defaultLocation = array();
    public static $darkMode = 0;


    public static function setGlobals()
    {
        // Database Connection 
        self::$db = \Config\Database::connect();
        $session = \Config\Services::session();
        //set themes
        self::$themes = self::$db->table('themes')->get()->getResult();
        //set general settings
        self::$generalSettings = self::$db->table('general_settings')->where('id', 1)->get()->getRow();
        //set routes
        $routes = self::$db->table('routes')->get()->getResult();
        self::$customRoutes = new \stdClass();
        if (!empty($routes)) {
            foreach ($routes as $route) {
                $routeKey = $route->route_key;
                self::$customRoutes->$routeKey = $route->route;
            }
        }

        // var_dump(self::$customRoutes);

        //set roles permissions
        self::$rolesPermissions = self::$db->table('roles_permissions')->get()->getResult();
        //set languages
        self::$languages = self::$db->table('languages')->where('status', 1)->get()->getResult();
        //set timezone
        if (!empty(self::$generalSettings->timezone)) {
            date_default_timezone_set(self::$generalSettings->timezone);
        }
        //set active language
        self::$defaultLang = self::$db->table('languages')->where('id', self::$generalSettings->site_lang)->get()->getRow();
        if (empty(self::$defaultLang)) {
            self::$defaultLang = self::$db->table('languages')->get()->getFirstRow();
        }
        $langSegment = getSegmentValue(1);
        $langId = null;
        if (!empty(self::$languages)) {
            foreach (self::$languages as $lang) {
                if ($langSegment == $lang->short_form) {
                    $langId = $lang->id;
                    self::$langSegment = $lang->short_form;
                    break;
                }
            }
        }
        if (empty($langId)) {
            $langId = self::$defaultLang->id;
        }
        self::setActiveLanguage($langId);
        if (empty(self::$activeLang)) {
            self::$activeLang = self::$defaultLang;
        }
        $session->set('activeLangId', self::$activeLang->id);
        //set language base URL
        self::$langBaseUrl = base_url(self::$activeLang->short_form);
        if (self::$activeLang->id == self::$defaultLang->id) {
            self::$langBaseUrl = base_url();
        }
        //set settings
        self::$settings = self::$db->table('settings')->where('lang_id', self::$activeLang->id)->get()->getRow();


        //authentication
        if (!empty($session->get('min_ses_id')) && !empty($session->get('min_ses_role_id')) && !empty($session->get('min_ses_pass'))) {
           
            $user = self::$db->table('users')
                ->join('roles_permissions', 'roles_permissions.id = users.role_id')
                ->where('users.id', cleanNumber($session->get('min_ses_id')))
                ->select('users.*, role_name, permissions, is_super_admin, is_admin, is_vendor, is_member')
                ->get()
                ->getRow();
           
                if (!empty($user) && $user->banned != 1 && md5($user->password ?? '') == $session->get('min_ses_pass')) {
                self::$authCheck = true;
                self::$authUser = $user;
            }
        }
        // if (!empty($session->get('min_staff_ses_id')) && !empty($session->get('min_staff_ses_role_id')) && !empty($session->get('min_staff_ses_pass'))) {
           
        //     $staff = self::$db->table('admins')
        //         ->join('roles_permissions', 'roles_permissions.id = users.role_id')
        //         ->where('users.id', cleanNumber($session->get('min_staff_ses_id')))
        //         ->select('users.*, role_name, permissions, is_super_admin, is_admin, is_vendor, is_member')
        //         ->get()
        //         ->getRow();
           
        //         if (!empty($staff) && $staff->banned != 1 && md5($staff->password ?? '') == $session->get('min_staff_ses_pass')) {
        //         self::$authStaffCheck = true;
        //         self::$authStaff = $staff;
        //     }
        // }
        //Chatgpt code
        // if (!empty($session->get('min_ses_id')) && !empty($session->get('min_ses_role_id')) && !empty($session->get('min_ses_pass'))) {
        //     $userId = cleanNumber($session->get('min_ses_id'));
        //     $roleId = $session->get('min_ses_role_id');
        //     $sessionPassword = $session->get('min_ses_pass');
            
        //     // Determine if the user is an admin or regular user
        //     if ($roleId === 1) {
        //         $user = self::$db->table('admins')
        //             ->join('roles_permissions', 'roles_permissions.id = users.role_id')
        //             ->where('admins.id', $userId)
        //             ->select('admins.*, role_name, permissions, is_super_admin, is_admin, is_vendor, is_member')
        //             ->get()
        //             ->getRow();
        //     } else {
        //         $user = self::$db->table('users')
        //             ->join('roles_permissions', 'roles_permissions.id = users.role_id')
        //             ->where('users.id', $userId)
        //             ->select('users.*, role_name, permissions, is_super_admin, is_admin, is_vendor, is_member')
        //             ->get()
        //             ->getRow();
        //     }
        
        //         if (!empty($user)) {
        //             if ($user->banned != 1 && md5($user->password ?? '') == $sessionPassword) {
        //                 self::$authCheck = true;
        //                 self::$authUser = $user;
        //             } 
        //         }
        // }
    //     echo "<pre>";
    //     print_r(user());

    // echo "</pre>";

                //authentication varient
                // if (!empty($session->get('min_ses_id')) && !empty($session->get('min_ses_role')) && !empty($session->get('vr_ses_pass'))) {
                //     $user = self::$db->table('users')->where('id', cleanNumber($session->get('vr_ses_id')))->get()->getRow();
                //     if (!empty($user) && md5($user->password ?? '') == $session->get('min_ses_pass')) {
                //         if ($user->status == 1) {
                //             self::$authCheck = true;
                //             self::$authUser = $user;
                //         }
                //     }
                // }



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
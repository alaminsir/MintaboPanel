<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Globals extends BaseConfig
{
    private static $db = null;
    public static $themes = array();
    public static $activeTheme = null;
    public static $settings = array();
    public static $generalSettings = array();
    public static $blogSettings = array();
    public static $paymentSettings = array();
    public static $productSettings = array();
    public static $storageSettings = array();
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

    public static function setAdminPanel()
    {
        // Database Connection 
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




        //set settings
        self::$settings = self::$db->table('settings')->where('lang_id', self::$activeLang->id)->get()->getRow();





        // Chatgpt code
        if (!empty($session->get('min_ap_ses_id')) && !empty($session->get('min_ap_ses_role_id')) && !empty($session->get('min_ap_ses_pass'))) {
            $userId = cleanNumber($session->get('min_ap_ses_id'));
            $roleId = $session->get('min_ap_ses_role_id');
            $sessionPassword = $session->get('min_ap_ses_pass');
            
            // Determine if the user is an admin or regular user
            if ($roleId === 1) {
                $user = self::$db->table('admins')
                    ->join('roles_permissions', 'roles_permissions.id = users.role_id')
                    ->where('admins.id', $userId)
                    ->select('admins.*, role_name, permissions, is_super_admin, is_admin, is_vendor, is_member')
                    ->get()
                    ->getRow();
            }
        
                if (!empty($user)) {
                    if ($user->banned != 1 && md5($user->password ?? '') == $sessionPassword) {
                        self::$authCheck = true;
                        self::$authUser = $user;
                    } 
                }
        }







    }





















}
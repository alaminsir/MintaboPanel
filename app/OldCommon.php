<?php

use \Config\Globals;

/**
 * --------------------------------------------------------------------------
 *  1. Basic function
 *  2. 
 *  3. 
 *  4. 
 *  5. 
 *  6. 
 *  7.
 *  8.
 *  9.
 *  10.
 * --------------------------------------------------------------------------
 */





/**
 * --------------------------------------------------------------------------
 *  FUNCTIONS: 1. Basic Function 
 * --------------------------------------------------------------------------
 */



if (strpos($_SERVER['REQUEST_URI'], '/index.php') !== false) {
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (!empty($url)) {
        $url = str_replace('/index.php', '', $url);
    }
    header('Location: ' . $url);
    exit();
}
//trimg string
if (!function_exists('strTrim')) {
    function strTrim($str)
    {
        if (!empty($str)) {
            return trim($str);
        }
    }
}

//str replace
if (!function_exists('strReplace')) {
    function strReplace($search, $replace, $str)
    {
        if (!empty($str)) {
            return str_replace($search, $replace, $str);
        }
    }
}
//character limiter
if (!function_exists('characterLimiter')) {
    function characterLimiter($str, $limit, $endChar = '')
    {
        if (!empty($str) && strlen($str) > $limit) {
            return mb_strimwidth($str, 0, $limit + 3, $endChar);
        }
        return $str;
    }
}

//esc & addslashes
if (!function_exists('escSls')) {
    function escSls($str)
    {
        if (!empty($str)) {
            return addslashes(esc($str));
        }
    }
}
//remove special characters
if (!function_exists('removeSpecialCharacters')) {
    function removeSpecialCharacters($str, $removeQuotes = false)
    {
        $str = removeForbiddenCharacters($str);
        $str = strReplace('#', '', $str);
        $str = strReplace('!', '', $str);
        $str = strReplace('(', '', $str);
        $str = strReplace(')', '', $str);
        if ($removeQuotes) {
            $str = clrQuotes($str);
        }
        return $str;
    }
}
//clean slug
if (!function_exists('cleanSlug')) {
    function cleanSlug($slug)
    {
        $slug = strTrim($slug);
        if (!empty($slug)) {
            $slug = urldecode($slug);
        }
        if (!empty($slug)) {
            $slug = strip_tags($slug);
        }
        return removeSpecialCharacters($slug);
    }
}

//clean string
if (!function_exists('cleanStr')) {
    function cleanStr($str)
    {
        $str = strTrim($str);
        $str = removeSpecialCharacters($str);
        return esc($str);
    }
}

//clean number
if (!function_exists('cleanNumber')) {
    function cleanNumber($num)
    {
        $num = strTrim($num);
        $num = esc($num);
        if (empty($num)) {
            return 0;
        }
        return intval($num);
    }
}

//clean number
if (!function_exists('clrQuotes')) {
    function clrQuotes($str)
    {
        $str = strReplace('"', '', $str);
        $str = strReplace("'", '', $str);
        return $str;
    }
}

//remove forbidden characters
if (!function_exists('removeForbiddenCharacters')) {
    function removeForbiddenCharacters($str)
    {
        $str = strTrim($str);
        $str = strReplace(';', '', $str);
        $str = strReplace('"', '', $str);
        $str = strReplace('$', '', $str);
        $str = strReplace('%', '', $str);
        $str = strReplace('*', '', $str);
        $str = strReplace('/', '', $str);
        $str = strReplace('\'', '', $str);
        $str = strReplace('<', '', $str);
        $str = strReplace('>', '', $str);
        $str = strReplace('=', '', $str);
        $str = strReplace('?', '', $str);
        $str = strReplace('[', '', $str);
        $str = strReplace(']', '', $str);
        $str = strReplace('\\', '', $str);
        $str = strReplace('^', '', $str);
        $str = strReplace('`', '', $str);
        $str = strReplace('{', '', $str);
        $str = strReplace('}', '', $str);
        $str = strReplace('|', '', $str);
        $str = strReplace('~', '', $str);
        $str = strReplace('+', '', $str);
        return $str;
    }
}



/**
 * --------------------------------------------------------------------------
 *  FUNCTIONS: Theme System 
 * --------------------------------------------------------------------------
 */

//get themes
if (!function_exists('getThemes')) {
    function getThemes()
    {
        return Globals::$themes;
    }
}

//get active theme
if (!function_exists('getActiveTheme')) {
    function getActiveTheme()
    {
        $theme = null;
        if (!empty(getThemes())) {
            foreach (getThemes() as $item) {
                if ($item->is_active == 1) {
                    $theme = $item;
                }
            }
            if (empty($theme)) {
                if (!empty(getThemes()[0])) {
                    $theme = getThemes()[0];
                }
            }
        }
        return $theme;
    }
}

//get theme path
if (!function_exists('getThemePath')) {
    function getThemePath()
    {
        $themePath = 'themes/onebook';
        if (!empty(getActiveTheme())) {
            $themePath = 'themes/' . getActiveTheme()->theme_folder;
        }
        return $themePath;
    }
}

//theme view
if (!function_exists('themeView')) {
    function themeView($view, $data = null)
    {
        if (!empty($data)) {
            return view(getThemePath() . '/' . $view, $data);
        } else {
            return view(getThemePath() . '/' . $view);
        }
    }
}

/**
 * --------------------------------------------------------------------------
 *  FUNCTIONS: Language 
 * --------------------------------------------------------------------------
 */

//language base URL
if (!function_exists('langBaseUrl')) {
    function langBaseUrl($route = null)
    {
        if (!empty($route)) {
            return Globals::$langBaseUrl . '/' . $route;
        }
        return Globals::$langBaseUrl;
    }
}
//generate base URL by language id
if (!function_exists('generateBaseURLByLangId')) {
    function generateBaseURLByLangId($langId)
    {
        if ($langId == Globals::$generalSettings->site_lang) {
            return base_url() . '/';
        } else {
            $languages = Globals::$languages;
            $shortForm = '';
            if (!empty($languages)) {
                foreach ($languages as $language) {
                    if ($langId == $language->id) {
                        $shortForm = $language->short_form;
                    }
                }
            }
            if ($shortForm != '') {
                return base_url($shortForm) . '/';
            }
        }
        return base_url() . '/';
    }
}

//generate base URL by language
if (!function_exists('generateBaseURLByLang')) {
    function generateBaseURLByLang($lang)
    {
        if (!empty($lang)) {
            if ($lang->id == Globals::$generalSettings->site_lang) {
                return base_url() . '/';
            } else {
                return base_url($lang->short_form) . '/';
            }
        }
        return base_url() . '/';
    }
}

//current full url
if (!function_exists('currentFullURL')) {
    function currentFullURL()
    {
        $currentURL = current_url();
        if (!empty($_SERVER['QUERY_STRING'])) {
            $currentURL = $currentURL . "?" . $_SERVER['QUERY_STRING'];
        }
        return $currentURL;
    }
}

//translation
if (!function_exists('trans')) {
    function trans($string)
    {
        if (isset(Globals::$languageTranslations[$string])) {
            return Globals::$languageTranslations[$string];
        }
        return "";
    }
}

//translation by label
if (!function_exists('getTransByLabel')) {
    function getTransByLabel($label, $langId)
    {
        $model = new \App\Models\LanguageModel();
        return $model->getTransByLabel($label, $langId);
    }
}

//admin url
if (!function_exists('adminUrl')) {
    function adminUrl($route = null)
    {
        if (!empty($route)) {
            return base_url(Globals::$customRoutes->admin . '/' . $route);
        }
        return base_url(Globals::$customRoutes->admin);
    }
}
//force redirect to URL
if (!function_exists('redirectToUrl')) {
    function redirectToUrl($url)
    {
        header('Location: ' . $url);
        exit();
    }
}
//redirect to back URL
if (!function_exists('redirectToBackURL')) {
    function redirectToBackURL()
    {
        $backURL = inputPost('back_url');
        if (!empty($backURL) && strpos($backURL, base_url()) !== false) {
            redirectToUrl($backURL);
            exit();
        }
        redirectToUrl(langBaseUrl());
        exit();
    }
}
//get request
if (!function_exists('inputGet')) {
    function inputGet($input_name, $removeForbidden = false)
    {
        $input = \Config\Services::request()->getGet($input_name);
        if (!is_array($input)) {
            $input = strTrim($input);
        }
        if ($removeForbidden) {
            $input = removeForbiddenCharacters($input);
        }
        return $input;
    }
}
//post request
if (!function_exists('inputPost')) {
    function inputPost($input_name, $removeForbidden = false)
    {
        $input = \Config\Services::request()->getPost($input_name);
        if (!is_array($input)) {
            $input = strTrim($input);
        }
        if ($removeForbidden) {
            $input = removeForbiddenCharacters($input);
        }
        return $input;
    }
}
//auth check




/**
 * --------------------------------------------------------------------------
 *  FUNCTIONS: Logo Function
 * --------------------------------------------------------------------------
 */


//get language
if (!function_exists('getLanguage')) {
    function getLanguage($id)
    {
        $model = new \App\Models\LanguageModel();
        return $model->getLanguage($id);
    }
}

//get favicon
if (!function_exists('getFavicon')) {
    function getFavicon()
    {
        // if (!empty(Globals::$generalSettings->favicon) && file_exists(FCPATH . Globals::$generalSettings->favicon)) {
        //     return base_url(Globals::$generalSettings->favicon);
        // }
        return base_url('assets/img/favicon.png');
    }
}

//get logo
if (!function_exists('getLogo')) {
    function getLogo()
    {
        // if (!empty(Globals::$generalSettings->logo) && file_exists(FCPATH . Globals::$generalSettings->logo)) {
        //     return base_url(Globals::$generalSettings->logo);
        // }
        return base_url('assets/img/logo.png');
    }
}

//get logo email
if (!function_exists('getLogoEmail')) {
    function getLogoEmail()
    {
        // if (!empty(Globals::$generalSettings->logo_email) && file_exists(FCPATH . Globals::$generalSettings->logo_email)) {
        //     return base_url(Globals::$generalSettings->logo_email);
        // }
        return base_url('assets/img/logo.png');
    }
}
//get user avatar
if (!function_exists('getUserAvatar')) {
    function getUserAvatar($avatarPath)
    {
        // if (!empty($avatarPath)) {
        //     if (file_exists(FCPATH . $avatarPath)) {
        //         return base_url($avatarPath);
        //     }
        //     return $avatarPath;
        // }
        return base_url("assets/img/user.png");
    }
}













































































//get segment value
if (!function_exists('getSegmentValue')) {
    function getSegmentValue($segmentNumber)
    {
        try {
            $uri = service('uri');
            if ($uri->getSegment($segmentNumber) !== null) {
                return $uri->getSegment($segmentNumber);
            }
        } catch (Exception $e) {
        }
        return null;
    }
}
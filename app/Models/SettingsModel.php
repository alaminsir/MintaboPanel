<?php namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends BaseModel
{
    protected $builder;
    protected $builderGeneral;
    protected $builderStorage;
    protected $builderFonts;
    protected $builderPaymentSettings;
    protected $builderPaymentGateways;
    protected $builderProductSettings;
    protected $builderRoutes;
    
    public function __construct()
    {
        parent::__construct();
        $this->builder = $this->db->table('settings');
        $this->builderGeneral = $this->db->table('general_settings');
        $this->builderStorage = $this->db->table('storage_settings');
        $this->builderFonts = $this->db->table('fonts');
        $this->builderPaymentSettings = $this->db->table('payment_settings');
        $this->builderPaymentGateways = $this->db->table('payment_gateways');
        $this->builderProductSettings = $this->db->table('product_settings');
        $this->builderRoutes = $this->db->table('routes');
    }







    //get settings
    public function getSettings($langId)
    {
        return $this->builder->where('lang_id', cleanNumber($langId))->get()->getRow();
    }

    //get general settings
    public function getGeneralSettings()
    {
        return $this->builderGeneral->where('id', 1)->get()->getRow();
    }

    //get routes
    public function getRoutes()
    {
        return $this->db->table('routes')->where('id', 1)->get()->getRow();
    }













    /*
    *------------------------------------------------------------------------------------------
     * Themes
    *------------------------------------------------------------------------------------------
    */

    //set theme mode
    public function setThemeMode()
    {
        $mode = inputPost('theme_mode');
        if ($mode == 'light' || $mode == 'dark') {
            helperSetCookie('theme_mode', $mode);
            $this->builderGeneral->where('id', 1)->update(['theme_mode' => $mode]);
        }
    }

    //set theme
    public function setTheme()
    {
        $id = inputPost('theme_id');
        $theme = $this->getTheme($id);
        if (!empty($theme)) {
            $this->db->table('themes')->update(['is_active' => 0]);
            $this->db->table('themes')->where('id', $theme->id)->update(['is_active' => 1]);
        }
    }

    //set theme settings
    public function setThemeSettings()
    {
        $id = inputPost('id');
        $theme = $this->getTheme($id);
        if (!empty($theme)) {
            $data = [
                'theme_color' => inputPost('theme_color'),
                'block_color' => inputPost('block_color'),
                'mega_menu_color' => inputPost('mega_menu_color')
            ];
            $this->db->table('themes')->where('id', $theme->id)->update($data);
        }
    }

    //get theme
    public function getTheme($id)
    {
        return $this->db->table('themes')->where('id', cleanNumber($id))->get()->getRow();
    }

    //get themes
    public function getThemes()
    {
        return $this->db->table('themes')->get()->getResult();
    }

















}
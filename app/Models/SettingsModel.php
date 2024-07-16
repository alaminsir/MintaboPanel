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











}
<?php namespace App\Models;

use CodeIgniter\Model;
use Config\Globals;

class BaseModel extends Model
{
    public $request;
    public $session;
    public $activeLanguages;
    public $activeLang;
    public $generalSettings;
    public $settings;
    // public $defaultCurrency;
    // public $selectedCurrency;

    public function __construct()
    {
        parent::__construct();
        $this->request = \Config\Services::request();
        $this->session = \Config\Services::session();
        $this->activeLang = Globals::$activeLang;
        $this->generalSettings = Globals::$generalSettings;
        $this->activeLanguages = Globals::$languages;

        // $this->activeLanguages = Globals::$languages;
        // $this->activeLang = Globals::$activeLang;
        // $this->generalSettings = Globals::$generalSettings;
        // $this->productSettings = Globals::$productSettings;
        // $this->storageSettings = Globals::$storageSettings;
        // $this->settings = Globals::$settings;
        // $this->paymentSettings = Globals::$paymentSettings;
        // $this->defaultCurrency = Globals::$defaultCurrency;
        // $this->selectedCurrency = getSelectedCurrency();
    }

}
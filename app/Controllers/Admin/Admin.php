<?php

namespace App\Controllers\Admin;


class Admin extends AdminBaseController
{
    public function index(): string
    {
        $data['title'] = trans("navigation");


        return view('admin/includes/_header', $data)
        . view('admin/index', $data)
        . view('admin/includes/_footer');
    }

        /*
    * Navigation
    */
    public function navigation()
    {
        // checkPermission('navigation');
        $data['title'] = trans("navigation");

        return view('admin/includes/_header', $data)
        . view('admin/navigation/navigation', $data)
        . view('admin/includes/_footer');
        // return "Navigation";
    }
    /**
     * Themes
     */
    public function themes()
    {
        // checkAdmin();
        $data['title'] = trans("themes");
        // $data['themes'] = $this->settingsModel->getThemes();

   
        return view('admin/includes/_header', $data)
        . view('admin/themes', $data)
        . view('admin/includes/_footer');

        // return "Themes Page";
    }
}
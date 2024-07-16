<?php

namespace App\Controllers\Market;

class Home extends MarketBaseController
{
    public function index(): string
    {

        // return "Market Place";
         return view('market/partials/_header')
         . view('market/index')
         .view('market/partials/_footer');
        // return view('market/index');
    }
}

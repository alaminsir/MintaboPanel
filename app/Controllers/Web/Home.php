<?php

namespace App\Controllers\Web;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}

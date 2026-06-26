<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home/index', [
        'title' => 'ExploreID',
        'page'  => 'home'
        ]);
    }

    // public function footer(): string
    // {
    //     return view('la');
    // }
}

<?php

namespace App\Controllers;

class Journey extends BaseController
{
    public function index()
    {
        return view(
            'journey/index',
            [
                'title' => 'My Journey',
                'page'  => 'Journey'
            ]
        );
    }
}
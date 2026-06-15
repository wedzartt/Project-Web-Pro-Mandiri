<?php

namespace App\Controllers;

class Succes extends BaseController
{
    public function index()
    {
        return view(
            'succes/index',
            [
                'title' => 'Succes Page',
                'page'  => 'Succes'
            ]
        );
    }
}
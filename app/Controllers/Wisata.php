<?php

namespace App\Controllers;

class Wisata extends BaseController
{
    public function index(): string
    {
        return view(
            'destinations/index',
            [
                'title' => 'Destinations',
                'page'  => 'destinations'
            ]
        );
    }

    public function detail($id)
    {
        return view(
            'destinations/detail',
            [
                'title' => 'Destination Detail',
                'page'  => 'destinations',
                'id'    => $id
            ]
        );
    }
}

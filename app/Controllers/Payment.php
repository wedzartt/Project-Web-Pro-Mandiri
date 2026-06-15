<?php

namespace App\Controllers;

class Payment extends BaseController
{
    public function index()
    {
        return view(
            'payment/index',
            [
                'title' => 'Payment Method',
                'page'  => 'payment'
            ]
        );
    }
}
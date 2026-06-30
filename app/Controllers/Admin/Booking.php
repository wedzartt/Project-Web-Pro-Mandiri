<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Booking extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        return view(
            'admin/booking',
            $data
        );
    }
}
<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Transaction extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        return view(
            'admin/transaction',
            $data
        );
    }
}
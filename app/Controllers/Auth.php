<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login(): string
    {
        $data = [
            'title' => 'Login'
        ];

        return view(
            'auth/login',
            $data
        );
    }

    public function register(): string
    {
        $data = [
            'title' => 'Register'
        ];

        return view(
            'auth/register',
            $data
        );
    }
}

<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if ($this->request->getMethod() == 'POST') {
            $userModel = new UserModel();

            $user = $userModel
                ->where(
                    'email',
                    $this->request->getPost('email')
                )
                ->first();

            if (!$user) {
                return redirect()
                    ->back();
            }

            if (
                !password_verify(
                    $this->request->getPost('password'),
                    $user['password']
                )
            ) {
                return redirect()
                    ->back();
            }

            session()->set([

                'id' => $user['id'],

                'name' => $user['name'],

                'email' => $user['email'],

                'role' => $user['role'],

                'login' => true
            ]);

            // CEK ROLE

            if ($user['role'] == 'admin') {
                return redirect()
                    ->to('/admin/dashboard');
            }

            return redirect()
                ->to('/');
        }

        return view('auth/login');
    }
    public function register()
    {
        if ($this->request->getMethod() == 'POST') {
            $userModel = new UserModel();

            $userModel->insert([

                'name' => $this->request->getPost('name'),

                'email' => $this->request->getPost('email'),

                'password' => password_hash(
                    $this->request->getPost('password'),
                    PASSWORD_DEFAULT
                ),

                'role' => 'user'
            ]);

            return redirect()
                ->to('/login');
        }

        return view('auth/register');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()
            ->to('/');
    }
}

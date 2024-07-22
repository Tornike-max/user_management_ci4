<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class SessionController extends BaseController
{
    public function index()
    {
        return view('users/login');
    }

    public function store()
    {

        helper(['form']);

        $rules = [

            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Name field is required',
                    'valid_email' => 'Your Email is not valid'
                ]
            ],
            'password' => [
                'rules' => 'required|max_length[100]|min_length[6]',
                'errors' => [
                    'required' => 'Password field is required',
                    'min_length' => 'Password must be at least 6 characters long',
                    'max_length' => 'password can not be longer than 20 characters'

                ]
            ],
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('login')->with('error', 'Error while login user');
        }

        $validatedData = $this->validator->getValidated();
        $usersModel = model(User::class)->getUser($validatedData['email']);
        // echo '<pre>';
        // var_dump($validatedData['password']);
        // echo '</pre>';
        // exit;

        if (password_verify($validatedData['password'], $usersModel['password'])) {
            session()->set('loggedInUser', $usersModel['id']);
            return redirect()->to(base_url('/'))->with('success', 'User logged in successfully');;
        };
    }
}

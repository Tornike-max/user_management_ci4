<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
    }

    public function create()
    {
        helper('form');

        return view('users/create');
    }

    public function store()
    {
        helper('form');

        $data = $this->request->getPost(['fullname', 'email', 'password', 'passwordConf']);

        if (!$this->validateData($data, [
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'passwordConf' => 'required|matches[password]'
        ])) {
            return redirect()->to(base_url('users/create'))->withInput();
        }


        $validatedData = $this->validator->getValidated();
        $validatedData['password'] = password_hash($validatedData['password'], PASSWORD_BCRYPT);

        $model = model(User::class);
        $model->insert($validatedData);

        return redirect()->to(base_url('/'))->with('success', 'User Created Successfully');
    }
}

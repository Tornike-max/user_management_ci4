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
            return redirect()->to(base_url('users/create'))->withInput()->with('error', 'Error while creating user');
        }


        $validatedData = $this->validator->getValidated();
        $validatedData['password'] = password_hash($validatedData['password'], PASSWORD_BCRYPT);

        $model = model(User::class);
        $model->insert($validatedData);

        return redirect()->to(base_url('/'))->with('success', 'User Created Successfully');
    }


    public function edit(string $id)
    {
        helper('form');
        $model = model(User::class);
        $user = $model->find($id);

        return view('users/edit', [
            'user' => $user
        ]);
    }

    public function update(string $id)
    {
        helper('form');
        $data = $this->request->getPost(['fullname', 'email']);

        if (!$this->validateData($data, [
            'fullname' => 'required',
            'email' => 'required'
        ])) {
            return redirect()->to('/users/edit/' . $id)->withInput()->with('error', 'Error while creating user');
        }

        $validatedData = $this->validator->getValidated();

        if ($validatedData) {
            $model = model(User::class);

            $model->update($id, $validatedData);
            return redirect()->to('/')->with('success', 'User Updated Successfully');
        }
    }

    public function destroy(string $id)
    {
        if (!$id) {
            return redirect()->to('/')->with('error', 'Somethign went wrong while deleting selected user');
        }

        $model = model(User::class);
        $model->delete($id);

        return redirect()->to('/')->with('success', 'User Deleted Successfully');
    }
}

<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    public function index(): string
    {
        $model = model(User::class);

        $users = $model->paginate(10);

        $data = [
            'users' => $users,
            'pager' => $model->pager,
        ];
        return view('welcome_message', $data);
    }
}

<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'myProfile'
        ];
        return view('user/index', $data);
    }


}

<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'BackEnd'
        ];
        return view('admin/index', $data);
    }


}

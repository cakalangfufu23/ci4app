<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'BackEnd'
        ];
        return view('back/index', $data);
    }

    public function keuangan()
    {
        $data = [
            'title' => 'GMIM | Data Keuangan'
        ];
        return view('back/keuangan', $data);
    }

}

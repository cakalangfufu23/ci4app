<?php

namespace App\Controllers;

class Back extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin GMIM KAIMA'
        ];

        return view('back/index', $data);
    }

    public function keuangan()
    {
        $data = [
            'title' => 'Admin | Data Keuangan'
        ];
    }

}

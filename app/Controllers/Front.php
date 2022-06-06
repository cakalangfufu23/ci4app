<?php

namespace App\Controllers;

class Front extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Keuangan'
        ];
        return view('front/index', $data);
    }

    public function blog()
    {
        return view('front/blog');
    }
}

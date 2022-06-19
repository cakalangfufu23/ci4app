<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db     = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }


    public function index()
    {
        $data = [
            'title' => 'BackEnd'
        ];

        // ...model bawaan ci4, hanya bisa mengambil 1 data 
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll(); 


        // ...ambil banyak data di beberapa table di database, dgn menggunakan builer 
        // ...jika tidak menggunakan construct 

        // $db      = \Config\Database::connect();
        // $builder = $db->table('users');
        // $builder->select('users.id as userid, username, email, fullname, user_image, name');
        // $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        // $query = $builder->get();


        // ...jika menggunakan construct
        $this->builder->select('users.id as userid, username, email, fullname, user_image, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('admin/index', $data);
    }

    public function coba($id = 0)
    {
        $data['title'] = 'detail';

        $this->builder->select('users.id as userid, username, email, fullname, user_image, name, description');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if(empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/coba', $data);
    }

    

    // public function rendy($id)
    // {
    //     $data = [
    //         'title' => 'BackEnd | Detail'
    //     ];

    //     $this->builder->select('users.id as userid, username, email, fullname, user_image, name');
    //     $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
    //     $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
    //     $this->builder->where('users.id', $id);
    //     $query = $this->builder->get();

    //     $data['user'] = $query->getRow();

    //     return view('admin/index', $data);
    // }


}

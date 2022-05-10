<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['menu'] = 'dashboard';
        $data['sub-menu'] = 'dashboard';

        if (in_groups('admin')) {
            return view('dashboard/admin/index', $data);
        } else {
            return view('dashboard/index', $data);
        }
    }

    public function user()
    {
        $data['title'] = 'User List';
        $data['menu'] = 'user-list';
        $data['sub-menu'] = 'user-list';

        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $builder = $this->db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'users.id = auth_groups_users.user_id');
        $builder->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        return view('dashboard/admin/user', $data);
    }

    public function cek_user()
    {
        dd(user());
    }
}

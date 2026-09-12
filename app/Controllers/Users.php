<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'username' => 'clara.delgado',
                'fullName' => 'Clara Delgado',
                'role'     => 'System Administrator',
            ],
            [
                'username' => 'marcus.thorne',
                'fullName' => 'Marcus Thorne',
                'role'     => 'Store Manager',
            ],
            [
                'username' => 'eleanor.vance',
                'fullName' => 'Eleanor Vance',
                'role'     => 'Head Cashier',
            ],
            [
                'username' => 'lucas.gallagher',
                'fullName' => 'Lucas Gallagher',
                'role'     => 'Cashier',
            ],
            [
                'username' => 'sophia.sterling',
                'fullName' => 'Sophia Sterling',
                'role'     => 'Inventory Specialist',
            ],
            [
                'username' => 'julian.hayes',
                'fullName' => 'Julian Hayes',
                'role'     => 'Cashier',
            ],
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users,
        ];

        return view('users/index', $data);
    }
}

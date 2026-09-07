<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
    [
        'username' => 'admin01',
        'name' => 'John Reyes',
        'role' => 'Administrator'
    ],
    [
        'username' => 'cashier01',
        'name' => 'Anna Cruz',
        'role' => 'Cashier'
    ],
    [
        'username' => 'cashier02',
        'name' => 'Paolo Garcia',
        'role' => 'Cashier'
    ],
    [
        'username' => 'manager01',
        'name' => 'Sofia Ramos',
        'role' => 'Manager'
    ],
    [
        'username' => 'staff01',
        'name' => 'Miguel Torres',
        'role' => 'Staff'
    ]
];
        return view('users', ['users' => $users]);
    }
}
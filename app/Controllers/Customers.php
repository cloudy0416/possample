<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
       $customers = [
    [
        'name' => 'Juan Dela Cruz',
        'email' => 'juan@example.com',
        'phone' => '09123456789'
    ],
    [
        'name' => 'Maria Santos',
        'email' => 'maria@example.com',
        'phone' => '09987654321'
    ],
    [
        'name' => 'Carlo Mendoza',
        'email' => 'carlo@example.com',
        'phone' => '09171234567'
    ],
    [
        'name' => 'Angela Reyes',
        'email' => 'angela@example.com',
        'phone' => '09281234567'
    ],
    [
        'name' => 'Mark Villanueva',
        'email' => 'mark@example.com',
        'phone' => '09561234567'
    ]
];

        return view('customers', ['customers' => $customers]);
    }
}
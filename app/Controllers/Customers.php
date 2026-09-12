<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'fullName' => 'Eleanor Vance',
                'email'    => 'eleanor.vance@example.com',
                'phone'    => '+1 (555) 234-5678',
            ],
            [
                'fullName' => 'Marcus Thorne',
                'email'    => 'marcus.thorne@example.com',
                'phone'    => '+1 (555) 345-6789',
            ],
            [
                'fullName' => 'Sophia Sterling',
                'email'    => 'sophia.sterling@example.com',
                'phone'    => '+1 (555) 456-7890',
            ],
            [
                'fullName' => 'Lucas Gallagher',
                'email'    => 'lucas.gallagher@example.com',
                'phone'    => '+1 (555) 567-8901',
            ],
            [
                'fullName' => 'Clara Delgado',
                'email'    => 'clara.delgado@example.com',
                'phone'    => '+1 (555) 678-9012',
            ],
            [
                'fullName' => 'Julian Hayes',
                'email'    => 'julian.hayes@example.com',
                'phone'    => '+1 (555) 789-0123',
            ],
        ];

        $data = [
            'title'     => 'Customer Accounts',
            'customers' => $customers,
        ];

        return view('customers/index', $data);
    }
}

<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home(): string
    {
        $data = [
            'title' => 'Home',
        ];

        return view('pages/home', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About',
        ];

        return view('pages/about', $data);
    }
}

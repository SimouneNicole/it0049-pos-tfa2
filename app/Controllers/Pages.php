<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home(): string
    {
        $data = [
            'title' => 'System Overview',
        ];

        return view('pages/home', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About POS',
        ];

        return view('pages/about', $data);
    }
}

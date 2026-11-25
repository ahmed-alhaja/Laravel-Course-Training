<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index(int $type)
    {
        $views = [
            1 => 'home.index',
            2 => 'home.index-2',
            3 => 'home.index-3',
            4 => 'home.index-4',
            5 => 'home.index-5', 
            6 => 'home.index-6',
        ];

    

        return view($views[$type]);
    }
}

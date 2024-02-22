<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return 'Hello from ProductController';
    }

    // public function goto()
    // {
    //     return view('Users');
    // }

    public function show()
    {
        $data = [
            'Bleach',
            'Naruto',
            'Dragon Bold',
            'Fairy Tail'
        ];
        
        // Return the view 'users' and pass the $data array to it
        return view('users', ['data' => $data]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'John Doe';
        $age = 30;
        $class = 'Web Development';
        $arr = [
            [
                'name' => $name,
                'age' => $age,
                'class' => $class
            ],
            [
                'name' => $name,
                'age' => $age,
                'class' => $class
            ]
        ];
        return view('index', compact('arr'));
    }
}

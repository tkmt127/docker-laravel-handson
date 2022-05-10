<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    // public function __invoke()
    // {
    //     $name = "World";
    //     return $name;
    //     // return view('hello', ['name' => $name]);
    // }

    public function index($name = "World") {
        return view('hello', ['name' => $name]);
        // return $name;
    }
}
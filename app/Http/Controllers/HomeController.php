<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function welcome()
    {
        return view('index', ['title' => 'Rent Cars']);
    }

    public function index()
    {
        return view('home');
    }
}

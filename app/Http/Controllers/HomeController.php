<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //azione principale
    public function __invoke()
    {
        return view('home');
    }
}

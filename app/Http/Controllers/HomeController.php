<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //azione principale
    public function index()
    {
        $trains = Train::all();
        @dd($trains);
        return view('train.index', compact('trains'));
    }
}

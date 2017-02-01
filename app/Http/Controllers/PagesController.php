<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        $people = ['justin','daniel','ethan'];        
        return view('welcome')->with('people', $people);
    }

    public function about()
    {
        return view('about');
    }
}

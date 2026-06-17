<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $name = "Gabriel";
        $habits = ["Drink water", "Exercise", "Read a book"];
        return view('home', compact('name', 'habits'));
    }
}

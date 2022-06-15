<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() //The 1st thing executed when instansing this class
    {
        // $this->middleware('auth'); //verification of authentication (validation the authentication)

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies = Movie::all();
        //dd($movies);
        return view('home', compact('movies'));
    }
}

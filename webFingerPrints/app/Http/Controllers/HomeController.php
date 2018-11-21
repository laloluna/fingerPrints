<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Fingerprint;
use  App\Person;
use  App\Coincidence;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($current)
    {
        $fingerprints = Fingerprint::all();
        $people = Person::all();
        $coincidences = Coincidence::all();

        return view('home', compact('fingerprints', 'people', 'coincidences', 'current'));
    }
}

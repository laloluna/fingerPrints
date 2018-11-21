<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Fingerprint;
use  App\Person;
use  App\Coincidence;
use  App\Minutiae;

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

        // $minutiaes_c = Minutiae::all()->where('fingerprint_id', '=', $fingerprints->last()->id)->get();
        // $minutiaes_s = Minutiae::all()->where('fingerprint_id', '=', $current)->get();
        // JavaScript::put([
        //     'minutiaes' => array_merge($minutiaes_c, $minutiaes_s),
        //     'templateImg' =>  $fingerprints->last()->image,
        //     'queryImg' => Fingerprint::all()->find($current)->image
        // ]);

        return view('home', compact('fingerprints', 'people', 'coincidences', 'current'));
    }
}

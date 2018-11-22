<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Fingerprint;
use  App\Person;
use  App\Coincidence;
use  App\Minutiae;
use  JavaScript;

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

        $size = count($fingerprints);
        if($size > 1){
            $minutiaes_c = Minutiae::all()->where('fingerprint_id', $fingerprints->last()->id);
            $minutiaes_s = Minutiae::all()->where('fingerprint_id', $current);
            
            JavaScript::put([
                'minutiaes_c' => $minutiaes_c->toArray(),
                'minutiaes_s' => $minutiaes_s->toArray(),
                'templateImg' =>  $fingerprints->last()->image,
                'queryImg' => Fingerprint::all()->find($current)->image
            ]);
        }

        return view('home', compact('fingerprints', 'people', 'coincidences', 'current'));
    }
}

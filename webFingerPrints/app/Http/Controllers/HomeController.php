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
        $coincidences = count($fingerprints) > 0 ? 
        Coincidence::all()->where('current_fingerprint_id', $fingerprints->last()->id)->sortByDesc('matching') :
        Coincidence::all()->sortByDesc('matching');

        $current_coincidence = $coincidences->where('system_fingerprint_id', $current);

        // dd($current_coincidence);
        if(count($fingerprints) > 1 && count($current_coincidence) > 0){
            $current_minutiaes = Minutiae::all()->where('coincidence_id', $current_coincidence->first()->id);
            $minutiaes_c = $current_minutiaes->where('fingerprint_id', $fingerprints->last()->id);
            $minutiaes_s = $current_minutiaes->where('fingerprint_id', $current);
            
            JavaScript::put([
                'minutiaes_c' => $minutiaes_c->toArray(),
                'minutiaes_s' => $minutiaes_s->toArray(),
                'img_c' =>  $fingerprints->last()->image,
                'img_s' => Fingerprint::all()->find($current)->image
            ]);
        }

        return view('home', compact('fingerprints', 'people', 'coincidences', 'current'));
    }
}

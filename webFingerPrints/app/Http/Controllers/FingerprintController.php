<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Person;
use  App\Fingerprint;
use  App\Coincidence;
use  App\Minutiae;

class FingerprintController extends Controller
{

    public function upload() {
        return view('fingerprint.upload');
    }

    public function store(Request $request)
    {
        $person = Person::create([
            'name' => $request->name,
            'gender' => $request->gender,
        ]);

        $image = str_replace('public', 'storage', $request->file->store('public/images'));

        $fingerprint = Fingerprint::create([
            'side' => $request->side,
            'image' => $image,
            'person_id' => Person::all()->last()->id,
            'printype_id' => $request->type,
        ]);

        $fingerprints = Fingerprint::all();

        foreach($fingerprints as $comparator){
            if($fingerprint->id != $comparator->id){

                exec('bin\Comparator2.exe '.$image.' '.$comparator->image, $output);
                if(sizeof($output) < 1) {
                    return redirect()->back()->withErrors(['error', 'Error imagenes.']);
                }

                $comparison = json_decode($output[0]);

                // dd($comparison);

                $coincidence = Coincidence::create([
                    'current_fingerprint_id' => $fingerprint->id,
                    'system_fingerprint_id' => $comparator->id,
                    // 'check' => 0,
                    'check' => $comparison->Item1,
                ]);

                foreach($comparison->Item2 as $matchdata) {

                    $minutiae = $matchdata->TemplateMtia;
                    $minutiae_c = Minutiae::create([
                        'fingerprint_id' => $fingerprint->id,
                        'angle' => $minutiae->Angle,
                        'x' => $minutiae->X,
                        'y' => $minutiae->Y,
                        'mintype_id' => 1
                    ]);

                    $minutiae = $matchdata->QueryMtia;
                    $minutiae_s = Minutiae::create([
                        'fingerprint_id' => $comparator->id,
                        'angle' => $minutiae->Angle,
                        'x' => $minutiae->X,
                        'y' => $minutiae->Y,
                        'mintype_id' => 1
                    ]);
                }
            }
        }

        return redirect(route('home', Fingerprint::all()->first()->id));
    }
}

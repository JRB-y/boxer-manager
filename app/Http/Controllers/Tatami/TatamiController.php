<?php

namespace App\Http\Controllers\Tatami;

use App\Boxer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TatamiController extends Controller
{
    public function index()
    {
        $boxersTatami = Boxer::whereHas('types', function($q){
            $q->where('category', 'tatami');
        })->with('types')->get();

        $poussin = $boxersTatami->filter(function($val , $key){
            return $val['birth_date']->age >= 8 && $val['birth_date']->age <= 9;
        });

        $ecole = $boxersTatami->filter(function($val , $key){
            return $val['birth_date']->age >= 10 && $val['birth_date']->age <= 12;
        });

        $minime = $boxersTatami->filter(function($val , $key){
            return $val['birth_date']->age >= 13 && $val['birth_date']->age <= 14;
        });

        $cadet = $boxersTatami->filter(function($val , $key){
            return $val['birth_date']->age >= 15 && $val['birth_date']->age <= 16;
        });

        $junior = $boxersTatami->filter(function($val , $key){
            return $val['birth_date']->age >= 17 && $val['birth_date']->age <= 18;
        });

        $senior = $boxersTatami->filter(function($val , $key){
            return $val['birth_date']->age >= 19;
        });

        return view('tatami.index', compact('poussin', 'ecole', 'minime', 'cadet', 'junior', 'senior'));
    }
}

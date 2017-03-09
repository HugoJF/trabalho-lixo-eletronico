<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationsController extends Controller
{
    public function listInformations($name = 'home')
    {
        $currentPages = ['baterias', 'lampadas', 'monitores'];

        if(in_array($name, $currentPages)) {
            return view('informations.' . $name);
        } else if ($name == 'home') {
            return view('informations.information-list');
        } else {
            dd($name);
            //return redirect()->route('informations');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationsController extends Controller
{
    private $currentPages = ['baterias', 'lampadas', 'monitores'];

    public function listInformations($name = 'home')
    {

        if(in_array($name, $this->currentPages)) {
            return view('informations.' . $name);
        } else if ($name == 'home') {
            return view('informations.information-list');
        } else {
            dd($name);
            //return redirect()->route('informations');
        }
    }

    public function listRandomInformation()
    {
        $rand = rand(0, sizeof($this->currentPages) - 1);

        return $this->listInformations($this->currentPages[$rand]);
    }

    public function future()
    {
        return view('informations.future');
    }

    public function about()
    {
        return view('informations.about');
    }
}

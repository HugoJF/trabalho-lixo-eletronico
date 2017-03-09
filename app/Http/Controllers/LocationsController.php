<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Illuminate\Support\Facades\Auth;

class LocationsController extends Controller
{
    public function listStates()
    {
        return view('locations.list-states');
    }

    public function listLocations($state = null)
    {

        $locations = Location::where('state', $state)->get();

        return view('locations.list', [
            'locations' => $locations,
            'state' => $state
        ]);
    }

    public function submitLocationForm()
    {
        return view('locations.submitForm');
    }

    public function submitLocation(Request $request)
    {
        $location = new Location;

        $location->fill($request->all());

        $location->user()->associate(Auth::user());

        $location->save();

        //return redirect()->route('location-view', ['id' => $location->id]);
        return redirect()->route('locations', ['state' => $request->input('state')]);
    }
}

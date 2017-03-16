<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Location;

class LocationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['submitLocation', 'submitLocationForm']);
    }

    private function validState($state = null)
    {
        return array_key_exists($state, config('static.estados'));
    }

    public function listStates()
    {
        return view('locations.list-states');
    }

    public function listLocations($state = null)
    {
        if(!$this->validState($state)) return redirect()->route('locations-all');

        $locations = Location::where('state', $state)->get();

        return view('locations.list', [
            'locations' => $locations,
            'state' => $state
        ]);
    }

    public function autoListLocations()
    {
        $state = geoip()->getLocation()['state'];

        if($this->validState($state)) {
            return redirect()->route('locations', ['state' => $state]);
        } else {
            return redirect()->route('locations-all');
        }

    }

    public function submitLocationForm()
    {
        return view('locations.submitForm');
    }

    public function submitLocation(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'description' => 'required',
        ]);

        $location = new Location;

        $location->fill($request->all());

        $location->user()->associate(Auth::user());

        $location->save();

        //return redirect()->route('location-view', ['id' => $location->id]);
        return redirect()->route('locations', ['state' => $request->input('state')]);
    }

    public function view($id = null)
    {
        if($id === null) return redirect()->route('index');

        return view('locations.view', [
            'location' => Location::find($id),
        ]);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = "locations";

    protected $fillable = [
        'name',
        'address',
        'phone',
        'description',
        'city',
        'state',
        'monitores-televisores-lcd',
        'monitores-televisores-crt',
        'lampadas',
        'pilhas-baterias',
        'toners',
        'impressoras',
        'computadores',
        'celulares',
        'cameras-fotograficas',
    ];

    protected $attributes = [
        'monitores-televisores-lcd' => false,
        'monitores-televisores-crt' => false,
        'lampadas' => false,
        'pilhas-baterias' => false,
        'toners' => false,
        'impressoras' => false,
        'computadores' => false,
        'celulares' => false,
        'cameras-fotograficas' => false,
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

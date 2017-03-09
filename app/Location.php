<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = "locations";

    protected $guarded = ['id', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asana extends Model
{
    protected $table = 'asanas';

    public function benefits()
    {
        return $this->belongsToMany('App\Benefit');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $table = 'diseases';

    public function benefits()
    {
        return $this->morphMany('App\Benefit', 'benefitable');
    }
}

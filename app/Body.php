<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    protected $table = 'body';

    public function benefits()
    {
        return $this->morphMany('App\Benefit', 'benefitable');
    }
}

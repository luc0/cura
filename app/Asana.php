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

    public function contrapostures()
    {
        return $this->belongsToMany('App\Asana', 'asana_contraposture', 'asana_id', 'contraposture_id');
    }

    public function scopeWhereBenefitableLike($query, $search)
    {
        return $this->all()->filter(function ($asana) use ($search) {
            return $asana->benefits->filter(function ($benefit) use ($search) {
                return $benefit->benefitable->where('name', 'ilike', "%$search%")->count();
            })->count();
        });
    }
}

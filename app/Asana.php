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
            return $asana->benefits->first(function ($benefit) use ($search) {
                $foundInName = collect($benefit->benefitable)->contains($search);
                if (!$foundInName) {
                    dump(collect($benefit));
                    $foundInTags = collect($benefit)->contains($search);
                    return $foundInTags;
                }
                return $foundInName;
            });
        });
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $table = 'benefits';

    public function benefitable()
    {
        return $this->morphTo();
    }

    public function body()
    {
        return $this->belongsTo(Body::class, 'benefitable_type')
            ->where('benefits.benefitable_type', Body::class);
    }

    public function diseases()
    {
        return $this->belongsTo(Disease::class, 'benefitable_type')
            ->where('benefits.benefitable_type', Disease::class);
    }
}

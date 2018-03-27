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

    /*public function body()
    {
        return $this->belongsTo(Body::class, 'benefitable_type')
            ->where('benefits.benefitable_type', Body::class);
    }

    public function diseases()
    {
        return $this->belongsTo(Disease::class, 'benefitable_type')
            ->where('benefits.benefitable_type', Disease::class);
    }*/

    /*public function scopeWhereHasBenefitable($query, $callable = null)
    {
        return $query->where(function ($query) use ($callable) {
            list($type, $key) = $this->getPolymorphicFields();
            $this->newQuery()->distinct()->get([$type])->keyBy($type)->map(function ($model) use ($type) {
                return (new $model->{$type})->getTable();
            })->each(function ($table, $modelClass) use ($query, $type, $key, $callable) {
                $query->orWhereExists(function ($query) use ($table, $modelClass, $type, $key, $callable) {
                    $model = new $modelClass;
                    $query->select('*')->from($table)->where("{$this->getTable()}.{$type}", $modelClass)
                        ->whereRaw("{$this->getTable()}.{$key} = {$table}.{$model->getKeyName()}")
                        ->when($callable instanceof \Closure, function ($query) use ($callable) {
                            $query->where($callable);
                        });
                });
            });
        });
    }*/

    /*protected function getPolymorphicFields()
    {
        $relation = $this->benefitable();
        return [$relation->getMorphType(), $relation->getForeignKey()];
    }*/
}

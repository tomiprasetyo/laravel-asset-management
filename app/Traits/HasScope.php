<?php

namespace App\Traits;

trait HasScope
{
    /* 
    Sebuah query untuk melakukan pencarian data
    */
    public function scopeSearch($query, $type)
    {
        return $query->when(request()->search, function ($search) use ($type) {
            $search = $search->where($type, 'like', '%' . request()->search . '%');
        });
    }
}
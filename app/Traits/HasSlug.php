<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

trait HasSlug
{
    /* 
    Pengecekan sebuah schema dari tabel yang kita punya apakah di memliki field name 
    ataupun title jika punya maka field slug kita akan otomatis terisi 
    dengan memanfaatkan Str::slug pada data field name ataupun title yang kita punya
    */
    public static function BootHasSlug()
    {
        static::creating(function ($model) {
            if (Schema::hasColumn($model->getTable(), 'slug')) {
                $model->slug = Str::slug($model->name ?? $model->title);
            }
        });
    }
}
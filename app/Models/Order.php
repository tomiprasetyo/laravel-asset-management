<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'quantity', 'status', 'image', 'unit', 'name'];

    protected $casts = [
        'status' => OrderStatus::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'brand',
        'color',
        'price'
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'price' => 'decimal:2'
    ];

    public function getImageUrlAttribute($value)
    {
        return asset('storage/' . $this->image);
    }
}

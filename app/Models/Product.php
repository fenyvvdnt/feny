<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'image',
        'notes',
        'is_active'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'notes' => 'array',
        'is_active' => 'boolean'
    ];

    // Accessor untuk format harga
    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}

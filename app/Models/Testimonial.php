<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'level',
        'testimonial',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}

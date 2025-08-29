<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'adresse',
        'telephone',
        'email',
        'logo',
        'social_links'
    ];

    protected $casts = [
        'social_links' => 'array'
    ];

    public static function getFirst()
    {
        return static::first() ?? new static();
    }
}

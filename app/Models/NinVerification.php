<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NinVerification extends Model
{
    protected $fillable = [
        'nin',
        'name',
        'email',
        'phone',
        'status',
        'api_response',
    ];

    protected $casts = [
        'api_response' => 'array',
    ];
}
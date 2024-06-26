<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slogan',
        'domain',
        'email',
        'phone',
        'address',
        'gmaps_url',
        'favicon',
        'logo',
        'about',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'logo',
        'type',  //star, emoji, slider
        'user_id',
        'organization_id'
    ];
}

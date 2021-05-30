<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier',
        'name',
        'description',
        'logo',
        'type',  //star, emoji, ranger
        'interval',
        'user_id',
        'organization_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

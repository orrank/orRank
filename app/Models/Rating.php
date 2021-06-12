<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'queue_id',
        'user_id',
        'rate',
        'feedback'
    ];

    public function queue()
    {
        return $this->belongsTo(Queue::class);
    }
}

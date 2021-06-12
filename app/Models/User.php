<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'email',
        'password',
        'profile_image',
        'provider',
        'bio',
        'mobile',
        'location',
        'company',
        'website',
        'twitter',
        'facebook',
        'instagram',
        'isStaff',
        'isDeveloper',
        'isFlagged',
        'isVerified',
        'isDark'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function queue()
    {
        return $this->hasMany(Queue::class);
    }

    public function follows()
    {
        return $this->hasMany(Follow::class);
    }

    public  function isFollowing($target_id)
    {
        return (bool)$this->follows()->where('target_id', $target_id)->first(['id']);
    }
}

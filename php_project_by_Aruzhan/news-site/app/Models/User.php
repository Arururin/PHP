<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'password',
    ];
    
    protected $hidden = [
        'password'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function favs(): HasMany
    {
        return $this->hasMany(Fav::class);
    }

    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->Name;
    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function author(): HasOne
    {
        return $this->belongsTo(User::class);
    }

    public function category(): HasOne
    {
        return $this->belongsTo(Category::class);
    }

    public function favs(): HasMany
    {
        return $this->hasMany(Fav::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}

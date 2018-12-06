<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
use Rating;

class Book extends Model
{
    protected $fillable = ['user_id', 'title', 'description'];

    public function user()
    {
        return $this->belongsTo(User::clas);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}

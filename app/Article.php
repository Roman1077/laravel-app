<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ['title', 'body', 'img', 'slug'];

    //protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function stats()
    {
        return $this->hasOne(State::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

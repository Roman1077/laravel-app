<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['subject', 'body', 'article_id'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}

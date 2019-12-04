<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
$article = Article::find($id);
    
$comments = $$article->comments;
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Website extends Model
{
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}

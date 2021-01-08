<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function author()
    {
        return $this->belongsTo(User::class, "user", "id");
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, "posts_categories", "post", "category");
    }
}

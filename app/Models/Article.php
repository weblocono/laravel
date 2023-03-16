<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "content",
        "is_published",
        "likes",
        "slug",
        "user_id",
        "theme",
    ];

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->first();
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class, 'article_id', 'id')->get();
    }
}

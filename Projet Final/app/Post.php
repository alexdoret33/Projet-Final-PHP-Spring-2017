<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = array("id", "title", "content", "user_id", "created_at", "");

    public function user()
    {
        return $this->belongsTo("App\Post", "user_id", "id");
    }
}

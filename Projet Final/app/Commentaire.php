<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = "commentaires";
    protected $fillable = array(
        "id",
        "commentaire",
        "user_id",
        "created_at",
        "update_at");

    public function user()
    {
        return $this->belongsTo("App\User", "user_id", "id");
    }

    public static $rules = array(
        "create" => array(
            'commentaire' => 'required',
            'user_id' => 'required',
        ),

        "update" => array(
            'commentaire' => 'required',
            'user_id' => 'required',
        )
    );

}

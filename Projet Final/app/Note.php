<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $table = "notes";
    protected $fillable = array(
        "id",
        "notes",
        "matiere",
        "user_id",
        "created_at",
        "update_at");

    public function user()
    {
        return $this->belongsTo("App\User", "user_id", "id");
    }

    public static $rules = array(
        "create" => array(
            'matiere' => 'required',
            'notes' => 'required',
            'user_id' => 'required',
        ),

        "update" => array(
            'matiere' => 'required',
            'notes' => 'required',
            'user_id' => 'required',
        )
    );
}

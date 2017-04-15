<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authentificable;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Authentificable
{
    protected $table = "users";
    protected $fillable = array(
        "id",
        "email",
        "password",
        "nom",
        "prenom",
        "admin",
        "created_at",
        "updated_at",
        "remember_token");


    public static $rules = array
    (
        "create" => array(
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:2|confirmed',
        ),
        "update" => array(
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'string|min:2',
        )
    );

    protected $hidden = array("password","remember_token");

    public function setPasswordAttribute($value)
    {
        $this->attributes["password"] = Hash::make($value);
    }

    public function isAdmin()
    {
        $user = Auth::user(); // on stock dans user le user courant
        if ($user->admin==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function notes()
    {
        return $this->hasMany("App\Note", "user_id", "id");
    }

    public function commentaires()
    {
        return $this->hasMany("App\Commentaire", "user_id", "id");
    }

}

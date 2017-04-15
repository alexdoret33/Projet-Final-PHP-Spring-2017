<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginsController extends Controller
{
    public function index()
    {
        if(Auth::check())//vérifie si la personne est connecté
        {
            return view("login/stillLog");
        }
        else
        {
            return view("front/users/index");
        }
    }

    public function connexion(Request $request)
    {
        $input = $request->all();
        Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])); //laravel hash le password par défaut

        if(Auth::check())//vérifie si la personne est connecté
        {
            return redirect(route('login.connexion'))->with("info", "Vous êtes bien connecté"); //info, balise comme danger|success..
        }
        else //s'il n'est pas connecté
        {
            return redirect(route('login.index'))->with("danger", "Login ou mot de passe incorrect");
        }
    }

    public function deconnexion()
    {
        Auth::logout(); //Auth est le user en cours, celui qui est sur la page
        return redirect(route('login.index'))->with("info", "Vous êtes bien déconnecté");
    }

    public function create()
    {
        //renvoyer à store
    }
}

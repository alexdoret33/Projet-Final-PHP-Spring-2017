<?php

namespace App\Http\Controllers\Front;

use App\Commentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserCommentairesController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $input = $request->all(); //récupère les infos du formulaire
        //$this->validate($request, Commentaire::$rules["create"]);
        $status_create = Commentaire::create($input); //créé l'utilisateur
        if($status_create) //si l'utilisateur à été créé
        {
            return redirect()->back()->with("success", "Le commentaire a bien été ajoutée");
        }
        else
        {
            return redirect()->back()->with("danger", "Erreur lors de l'ajout du commentaire")->withInput(); //withInpunt: champ prérempli
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

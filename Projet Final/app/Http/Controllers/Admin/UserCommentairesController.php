<?php

namespace App\Http\Controllers\Admin;

use App\Commentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserCommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaires = Commentaire::get();
        return view("admin.users.show", compact("commentaires"));
    }


    public function create()
    {

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
        $commentaires = Commentaire::findOrFail($id);//récupérer l'id d'un utilisateur
        return view("admin.commentaires.edit", compact("commentaires"));
    }


    public function update(Request $request, $id)
    {
        $input = $request->all(); //récupère les inofs du formulaire
        //$this->validate($request, Commentaire::rules["update"]);
        $commentaires = Commentaire::findOrFail($id);
        $commentaires_update = $commentaires->update($input);
        if($commentaires_update) // si la mise à jour est réussi
        {
            return redirect(route("admin.users.index"))->with("NICE", "Le commentaire a bien été mise à jour");
        }
        else
        {
            return redirect()->back()->with("danger", "Erreur lors de la mise à jour du commentaire")->withInput();
        }
    }


    public function destroy($id)
    {
        $count = Commentaire::destroy($id);
        if ($count==1)
        {
            return redirect()->back()->with("success", "Le commentaire a bien été supprimé");
        }
        else
        {
            return redirect()->back()->with("danger", "Le commentaire n'a pas été supprimé");
        }
    }
}

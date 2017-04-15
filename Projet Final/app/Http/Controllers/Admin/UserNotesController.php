<?php

namespace App\Http\Controllers\Admin;

use App\Note;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserNotesController extends Controller
{

    public function index()
    {
        $notes = Note::get();
        return view("admin.users.show", compact("notes"));
    }


    public function create()
    {
        //NOON
    }


    public function store(Request $request)
    {
        $input = $request->all(); //récupère les infos du formulaire
        $this->validate($request, Note::$rules["create"]);
        $status_create = Note::create($input); //créé l'utilisateur
        if($status_create) //si l'utilisateur à été créé
        {
            return redirect()->back()->with("success", "La note a bien été ajoutée");
        }
        else
        {
            return redirect()->back()->with("danger", "Erreur lors de l'entrée de la note")->withInput(); //withInpunt: champ prérempli
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $notes = Note::findOrFail($id);//récupérer l'id d'un utilisateur
        return view("admin.notes.edit", compact("notes"));
    }


    public function update(Request $request, $id)
    {
        $input = $request->all(); //récupère les inofs du formulaire
        //$this->validate($request, Note::rules["update"]);
        $notes = Note::findOrFail($id);
        $notes_update = $notes->update($input);
        if($notes_update) // si la mise à jour est réussi
        {
            return redirect(route("admin.users.index"))->with("NICE", "La note a bien été mise à jour");
        }
        else
        {
            return redirect()->back()->with("danger", "Erreur lors de la mise à jour de la note")->withInput();
        }
    }


    public function destroy($id)
    {
        $count = Note::destroy($id);
        if ($count==1)
        {
            return redirect()->back()->with("success", "La note a bien été supprimée");
        }
        else
        {
            return redirect()->back()->with("danger", "La note n'a pas été supprimée");
        }
    }
}

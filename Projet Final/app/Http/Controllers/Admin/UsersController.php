<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view("admin.users.index", compact("users"));
    }


    public function create()
    {
        return view("admin.users.create");
    }


    public function store(Request $request)
    {
        $input = $request->all(); //récupère les infos du formulaire
        $this->validate($request, User::$rules["create"]);
        $status_create = User::create($input); //créé l'utilisateur
        if($status_create) //si l'utilisateur à été créé
        {
            return redirect(route("admin.users.index"))->with("success", "L'utilisateur à été créé");
        }
        else
        {
            return redirect()->back()->with("danger", "Erreur lors de la création de l'utilisateur")->withInput(); //withInpunt: champ prérempli
        }
    }


    public function show($id)
    {
        $user = User::findOrFail($id);//récupérer l'id d'un utilisateur
        return view("admin.users.show", compact("user")); //compact:envoi la variable users à la vu
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);//récupérer l'id d'un utilisateur
        return view("admin.users.edit", compact("user"));
    }


    public function update(Request $request, $id)
    {
        $input = $request->all(); //récupère les inofs du formulaire
        //$this->validate($request, User::$rules["update"]);
        $user = User::findOrFail($id);
        $user_update = $user->update($input);
        if($user_update) // si la mise à joru est réussi
        {
            return redirect(route("admin.users.index"))->with("NICE", "L'utilisateur a bien été mis à jour");
        }
        else
        {
            return redirect()->back()->with("danger", "Erreur lors de la création de l'utilisateur")->withInput();
        }
    }

    public function destroy($id)
    {
        $count = User::destroy($id);
        if ($count==1)
        {
            return redirect()->back()->with("success", "L'utilisateur a bien été supprimé");
        }
        else
        {
            return redirect()->back()->with("danger", "L'utilisateur n'a pas été supprimée");
        }
    }
}

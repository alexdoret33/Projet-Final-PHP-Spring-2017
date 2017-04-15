@extends("admin.default")
<div class="box-body quo-ms-6">
    {!! BootForm::open()->action(route("admin.users.store")) !!}
    {!! BootForm::text("Nom", "nom")->placeholder("Nom")->required(true) !!}
    {!! BootForm::text("Prénom", "prenom")->placeholder("Prénom")->required(true) !!}
    {!! BootForm::email("Email", "email")->placeholder("Email")->required(true) !!}
    {!! BootForm::password("Mot de passe", "password")->placeholder("Mot de passe")->required(true) !!}
    {!! BootForm::password("Confirmer le mot de passe", "password_confirmation")->placeholder("Confirmer le mot de passe")->required(true) !!}
    <input class="btn btn-primary pull-right" type="submit" value="Créer"/>
    {!! BootForm::close() !!}
</div>

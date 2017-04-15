@extends("admin.commun.default")
<div class="box-body quo-ms-6">
    {!! BootForm::open()->action(route("admin.users.update", $user)) !!}
    {!! BootForm::hidden("_method")->value("put") !!} <!-- Mettre en PUT -->
    {!! BootForm::text("Nom", "nom")->placeholder("Nom")->required(true)->defaultValue($user->nom) !!}
    {!! BootForm::text("Prénom", "prenom")->placeholder("Prénom")->required(true)->defaultValue($user->prenom) !!}
    {!! BootForm::email("Email", "email")->placeholder("Email")->required(true)->defaultValue($user->email) !!}
    {!! BootForm::password("Mot de passe", "password")->placeholder("Mot de passe") !!}
    {!! BootForm::password("Confirmer le mot de passe", "password_confirmation")->placeholder("Confirmer le mot de passe") !!}
    <input class="btn btn-primary pull-right" type="submit" value="Mofidier"/>
    {!! BootForm::close() !!}
</div>

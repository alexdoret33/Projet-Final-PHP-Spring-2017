@extends("front.default")

@section("content")

    <div class="box-body quo-ms-6">
        {!! BootForm::open()->action(route("login.connexion")) !!}
        {!! BootForm::email("Email", "email")->placeholder("Email")->required(true) !!}
        {!! BootForm::password("Mot de passe", "password")->placeholder("Mot de passe") !!}
        <input type="submit" value="Connexion"/>
        {!! BootForm::close() !!}
    </div>

@endsection
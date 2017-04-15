@extends("admin.default")

@section("content")
    <div>
        @foreach($users as $user)
        {!! $user->prenom !!} {!! $user->nom !!}

        {!! BootForm::open()->action(route("users.show", $user)) !!}
        {!! BootForm::hidden(("_method"))->value("get") !!} <!-- Mettre en destroy -->
        <input class="btn btn-primary" type="submit" value="Voir"/>
        {!! BootForm::close() !!}

        @endforeach
    </div>
@endsection
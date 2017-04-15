@extends("admin.default")
<div>

    {!! $user->nom !!} {!! $user->prenom !!}


    <table class="table table-hover">
        <thead>
        <tr>
            <th>Notes</th>
            <th>Matière</th>

        </tr>
        </thead>
        <tbody>
        @foreach($user->notes as $note)
            <tr>
                <td>{!! $note->notes !!}</td>
                <td>{!! $note->matiere !!}</td>


            </tr>
        @endforeach

        </tbody>
    </table>


    <div class="box-body quo-ms-6">
        {!! BootForm::open()->action(route("commentaires.store", $user)) !!}
        {!! BootForm::text("Commentaire", "commentaire")->placeholder("Commentaire")->required(true) !!}
        {!! BootForm::text("User_id", "user_id")->placeholder("User_id")->required(true)->defaultValue($user->id) !!}
        <input class="btn btn-primary pull-right" type="submit" value="Ajouter"/>
        {!! BootForm::close() !!}
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Commentaires</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user->commentaires as $commentaire)
            <tr>
                <td>{!! $commentaire->commentaire !!}</td>


            </tr>
        @endforeach

        </tbody>
    </table>

</div>
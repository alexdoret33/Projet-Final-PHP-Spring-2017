@extends("admin.commun.default")
<div>

    {!! $user->nom !!} {!! $user->prenom !!}

    {!! BootForm::open()->action(route("admin.users.edit", $user)) !!}
    {!! BootForm::hidden("_method")->value("get") !!} <!-- Mettre en destroye -->
    <input class="btn btn-primary" type="submit" value="Modifier"/>
    {!! BootForm::close() !!}

    {!! BootForm::open()->action(route("admin.users.destroy", $user)) !!}
    {!! BootForm::hidden("_method")->value("delete") !!} <!-- Mettre en destroye -->
    <input class="btn btn-primary" type="submit" value="Supprimer"/>
    {!! BootForm::close() !!}


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

            <td>
                {!! BootForm::open()->action(route("admin.notes.edit", $note)) !!}
                {!! BootForm::hidden("_method")->value("get") !!} <!-- Mettre en destroye -->
                <input class="btn btn-primary pull-right" type="submit" value="Modifier"/>
                {!! BootForm::close() !!}
            </td>
            <td>
                {!! BootForm::open()->action(route("admin.notes.destroy", $note)) !!}
                {!! BootForm::hidden("_method")->value("delete") !!} <!-- Mettre en destroye -->
                <input class="btn btn-primary pull-right" type="submit" value="Supprimer"/>
                {!! BootForm::close() !!}
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>


    <div class="box-body quo-ms-6">
        {!! BootForm::open()->action(route("admin.notes.store", $user)) !!}
        {!! BootForm::text("Note", "notes")->placeholder("Note")->required(true) !!}
        {!! BootForm::text("Matière", "matiere")->placeholder("Matière")->required(true) !!}
        {!! BootForm::text("User_id", "user_id")->placeholder("User_id")->required(true)->defaultValue($user->id) !!}
        <input class="btn btn-primary pull-right" type="submit" value="Ajouter"/>
        {!! BootForm::close() !!}
    </div>

    <div class="box-body quo-ms-6">
        {!! BootForm::open()->action(route("admin.commentaires.store", $user)) !!}
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

                <td>
                    {!! BootForm::open()->action(route("admin.commentaires.edit", $commentaire)) !!}
                    {!! BootForm::hidden("_method")->value("get") !!} <!-- Mettre en destroye -->
                    <input class="btn btn-primary pull-right" type="submit" value="Modifier"/>
                    {!! BootForm::close() !!}
                </td>
                <td>
                    {!! BootForm::open()->action(route("admin.commentaires.destroy", $commentaire)) !!}
                    {!! BootForm::hidden("_method")->value("delete") !!} <!-- Mettre en destroye -->
                    <input class="btn btn-primary pull-right" type="submit" value="Supprimer"/>
                    {!! BootForm::close() !!}
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>

</div>
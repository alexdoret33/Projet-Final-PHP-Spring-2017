@extends("admin.default")
<div class="box-body quo-ms-6">
    {!! BootForm::open()->action(route("admin.commentaires.update", $commentaires)) !!}
    {!! BootForm::hidden("_method")->value("put") !!} <!-- Mettre en PUT -->
    {!! BootForm::text("Commentaire", "commentaire")->placeholder("Commentaire")->required(true)->defaultValue($commentaires->commentaire) !!}
    {!! BootForm::text("User_id", "user_id")->placeholder("User_id")->required(true)->defaultValue($commentaires->user_id) !!}
    <input class="btn btn-primary pull-right" type="submit" value="Modifier"/>
    {!! BootForm::close() !!}
</div>
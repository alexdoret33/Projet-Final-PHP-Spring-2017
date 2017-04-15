@extends("admin.commun.default")
<div class="box-body quo-ms-6">
    {!! BootForm::open()->action(route("admin.notes.update", $notes)) !!}
    {!! BootForm::hidden("_method")->value("put") !!} <!-- Mettre en PUT -->
    {!! BootForm::text("Note", "notes")->placeholder("Note")->required(true)->defaultValue($notes->notes) !!}
    {!! BootForm::text("Matière", "matiere")->placeholder("Matière")->required(true)->defaultValue($notes->matiere) !!}
    {!! BootForm::text("User_id", "user_id")->placeholder("User_id")->required(true)->defaultValue($notes->user_id) !!}
    <input class="btn btn-primary pull-right" type="submit" value="Modifier"/>
    {!! BootForm::close() !!}
</div>
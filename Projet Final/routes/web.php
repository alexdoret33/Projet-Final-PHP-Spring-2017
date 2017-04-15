<?php

Route::get('/', function () {
    return view('welcome');
});
Route::group(array("prefix" => "admin",
    "middleware" => array("auth"),
    "namespace" => "Admin"), function()
{

});

Route::group(array(
    "namespace" => "Front"), function()
{
    Route::resource("users", "UsersController");
    Route::resource("commentaires", "UserCommentairesController");


});

Route::group(['prefix' => "admin", 'middleware' => array('auth', 'isAdmin'), "namespace" => "Admin", "as" => "admin."],
    function()
    {
        Route::resource("users", "UsersController");//pas users, mais admin/users pour pas être en conflit avec celle du dessus
        Route::resource("notes", "UserNotesController");
        Route::resource("commentaires", "UserCommentairesController");

    });

Route::post("login", array(
    "as" => "login.connexion",
    "uses" => "LoginsController@connexion",
));

Route::get("deconnexion", array(
    "as" => "login",
    "uses" => "LoginsController@deconnexion",
));

Route::get("login", array(
    "as" => "login",
    "uses" => "LoginsController@index",
));






    //php artisan route:list
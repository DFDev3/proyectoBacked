<?php

require 'vendor/autoload.php';

d([
    'nombre' =>  'Faboan',
    'apellido' => 'Suarez',
    'institucion' => 'UNAB'
]);

Route::get('/', function () {
    return "HOME PAGE";
});
Route::get('productos', function () {
    return "LISTADO DE TODOS LOS PRODUCTOS";
});
Route::get('/producots/{id}', function ($id)) {
    return "el nombre es : $id";
});
Route::get('/producots/create', function () {
    return "aqui va el formulario : $id";
});


?>
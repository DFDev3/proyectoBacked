<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return "HOME PAGE";
});
Route::get('productos', [ProductController::class, 'listProducts' ]);
Route::get('details', [ProductController::class, 'details' ]);
Route::get('/producots/{id}', function ($id){
    return "el nombre es : $id";
});
Route::get('/producots/create', function () {
    return "aqui va el formulario";
});




?>
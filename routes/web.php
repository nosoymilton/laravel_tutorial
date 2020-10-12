<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::group(['middleware' => ['permission:view_books|edit_books|delete_books|create_books']], function () {
    Route::resource('books', 'booksController');
});

Route::group(['middleware' => ['permission:view_users|edit_users|delete_users|create_users']], function () {
    Route::resource('users', 'UserController');
});

Route::group(['middleware' => ['permission:view_roles|edit_roles|delete_roles|create_roles']], function () {
    Route::resource('roles', 'RoleController');
});

Route::resource('libros', 'LibrosController');

Route::resource('editoriales', 'EditorialesController');

Route::resource('idiomas', 'IdiomasController');

Route::resource('autores', 'AutoresController');

Route::resource('ejemplares', 'EjemplaresController');

Route::resource('categorias', 'CategoriasController');

Route::resource('categoriasHasLibros', 'Categorias_has_librosController');

Route::resource('autoresHasLibros', 'Autores_has_librosController');

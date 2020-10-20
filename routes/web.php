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

Route::group(['middleware' => ['permission:ver_libros|editar_libros|eliminar_libros|crear_libros|catalogo_libros']], function () {
    Route::resource('books', 'booksController');
});

Route::group(['middleware' => ['permission:ver_usuarios|editar_usuarios|eliminar_usuarios|crear_usuarios']], function () {
    Route::resource('users', 'UserController');
});

Route::group(['middleware' => ['permission:ver_roles|editar_roles|eliminar_roles|crear_roles']], function () {
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

Route::resource('catalogo', 'CatalogoController');
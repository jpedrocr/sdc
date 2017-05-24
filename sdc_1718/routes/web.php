<?php

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
    return view('inicio');
});
Route::get('historia', function () {
    return view('sdc-historia');
});
Route::get('orgaos', function () {
    return view('sdc-orgaos');
});
Route::get('datas', function () {
    return view('sdc-datas');
});
Route::get('estatutos', function () {
    return view('sdc-estatutos');
});
Route::get('ligacoes', function () {
    return view('sdc-ligacoes');
});
Route::get('socios', function () {
    return view('sdc-socios');
});
Route::get('/equipas', function () {
    return view('welcome');
});
Route::get('/parcerias', function () {
    return view('parcerias');
});
Route::get('/produtos', function () {
    return view('produtos');
});
Route::get('/galeria', function () {
    return view('welcome');
});
Route::get('/contactos', function () {
    return view('contactos');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
    // Backpack\MenuCRUD
    CRUD::resource('menu-item', 'MenuItemCrudController');
});

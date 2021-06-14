<?php
Route::get('/', function () {
    return view('welcome');
});
Route::resource('cliente', 'ClienteControlador');

Auth::routes();


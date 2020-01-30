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
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');

Route::get('/addSkills', function () {
    return view('addSkills');
})->name('addSkills');

Route::get('/modifSkills', function () {
    return view('modifSkills');
})->name('modifSkills');

Route::get('/deleteSkills', function () {
    return view('deleteSkills');
})->name('deleteSkills');

Route::get('/adding', function () {
    return view('adding');
})->name('adding');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

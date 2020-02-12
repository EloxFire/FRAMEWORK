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

Route::get('/skills', function () {
    return view('skills.skills');
})->name('skills');

Route::get('/addSkills', function () {
    return view('skills.addSkills');
})->name('addSkills');

Route::get('/deleteSkills', function () {
    return view('skills.deleteSkills');
})->name('deleteSkills');

Route::get('/modifSkills', function () {
    return view('skills.modifSkills');
})->name('modifSkills');

Route::get('/users', function () {
    return view('users');
})->name('users');


Route::resource('skill', 'SkillController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

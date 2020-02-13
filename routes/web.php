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

Route::get('/displaySkills', function () {
    return view('skills.skills');
})->name('displaySkills');

Route::get('/addSkills', function () {
    return view('skills.addSkills');
})->name('addSkills');

Route::get('/deleteSkills', function () {
    return view('skills.deleteSkills');
})->name('deleteSkills');

Route::get('/modifSkills', function () {
    return view('skills.modifSkills');
})->name('modifSkills');

Route::get('/displayUsers', function () {
    return view('display.users');
})->name('displayUsers');


Route::post('newSkill', 'SkillController@store')->name('skill.store');
Route::delete('removeSkill', 'SkillController@destroy')->name('skill.destroy');
Route::update('changeSkill', 'SkillController@update')->name('skill.update');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

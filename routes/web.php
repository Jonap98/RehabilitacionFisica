<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/therapy/create', 'TherapyController@storeTherapy')->name('therapy.create');
Route::get('/exercise', 'ExerciseController@index')->name('exercise');
Route::post('/exercise/create', 'ExerciseController@storeExercise')->name('exercise.create');
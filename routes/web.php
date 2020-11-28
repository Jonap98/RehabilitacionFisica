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

Route::get('/therapy', 'TherapyController@index')->name('therapy');
Route::post('/therapy/create', 'TherapyController@storeTherapy')->name('therapy.create');

Route::get('/exercise', 'ExerciseController@index')->name('exercise');
Route::post('/exercise/create', 'ExerciseController@storeExercise')->name('exercise.create');

Route::get('/list/user', 'UserController@index')->name('list.user');

Route::get('/assignment/{id}', 'AssignmentController@index')->name('assignment');
Route::post('/asignment/{id}/store', 'AssignmentController@storeAssignment')->name('assignment');

Route::get('/workout/{id}', 'WorkoutController@index')->name('workout');
Route::post('/workout/{id}/store', 'WorkoutController@storeWorkout')->name('workout');

Route::get('/selection/therapy', 'TherapyController@selectionTherapy')->name('selection.therapy');
Route::get('/selection/exercise', 'ExerciseController@selectionExercise')->name('selection.exercise');

Route::get('/monitoring/{id}', 'MonitoringController@index')->name('monitoring');
//Route::post('/destroy', 'AssignmentController@destroy')->name('assignment.destroy');
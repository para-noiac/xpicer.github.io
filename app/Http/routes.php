<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','WelcomeController@index');

/* Lessons */

// Lesson1
Route::get('lesson1', array('as' => 'lesson1.index', 'uses' => 'Lesson1Controller@index'));

// Lesson2
Route::get('lesson2', array('as' => 'lesson2.index', 'uses' => 'Lesson2Controller@index'));
Route::get('lesson2/create', array('as' => 'lesson2.create', 'uses' => 'Lesson2Controller@create'));
Route::post('lesson2', array('as' => 'lesson2.store', 'uses' => 'Lesson2Controller@store'));

// Lesson3
Route::get('lesson3', array('as' => 'lesson3.index', 'uses' => 'Lesson3Controller@index'));
Route::get('lesson3/create', array('as' => 'lesson3.create', 'uses' => 'Lesson3Controller@create'));
Route::post('lesson3', array('as' => 'lesson3.store', 'uses' => 'Lesson3Controller@store'));

// Lesson4
Route::get('lesson4', array('as' => 'lesson4.index', 'uses' => 'Lesson4Controller@index'));
Route::get('lesson4/create', array('as' => 'lesson4.create', 'uses' => 'Lesson4Controller@create'));
Route::post('lesson4', array('as' => 'lesson4.store', 'uses' => 'Lesson4Controller@store'));
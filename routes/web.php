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

Route::get('/', 'Client\Index\IndexController@index')->name('index.index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Courses
    Route::get('/courses', 'Courses\CoursesController@index')->name('courses.index');
    Route::get('/courses/{course}', 'Courses\CoursesController@show')->name('courses.show');

    // Lessons
    Route::get('/courses/{course}/lessons/{lesson}', 'Courses\LessonsController@show')->name('lessons.show');

    // Practice
    Route::get('/practice', 'Practice\PracticeController@index')->name('practice.index');
});

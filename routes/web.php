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

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Courses
    Route::get('/courses', 'Courses\CoursesController@index')->name('courses.index');
    Route::get('/courses/{courseSlug}', 'Courses\CoursesController@show')->name('courses.show');

    // Lessons
    Route::get('/courses/{courseSlug}/lessons/{lessonSlug}', 'Courses\LessonsController@show')->name('lessons.show');

    // Practice
    Route::get('/practice', 'Practice\PracticeController@index')->name('practice.index');
});

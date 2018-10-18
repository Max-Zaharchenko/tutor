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

\Illuminate\Support\Facades\Auth::routes(['register' => false]);

$router->get('/', 'Client\Index\IndexController@index')->name('index.index');

$router->get('/join', 'Client\Students\JoinController@show')->name('client.students.showJoinForm');
$router->post('/join', 'Client\Students\JoinController@store')->name('client.students.join');

$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('/home', 'HomeController@index')->name('home');

    // Courses
    $router->get('/courses', 'Courses\CoursesController@index')->name('courses.index');
    $router->get('/courses/{courseSlug}', 'Courses\CoursesController@show')->name('courses.show');

    // Lessons
    $router->get('/courses/{courseSlug}/lessons/{lessonSlug}', 'Courses\LessonsController@show')->name('lessons.show');

    // Practice
    $router->get('/practice', 'Practice\PracticeController@index')->name('practice.index');
});

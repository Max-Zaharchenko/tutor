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

\Illuminate\Support\Facades\Auth::routes();

//$router->get('/mailable', function () {
//    return new \App\Mail\Students\Invite(\App\Models\Invite::first());
//});

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

$router->get('/schedule', function () {

    $hours = [
        '13:**' => [
            ['start' => '13:05', 'end' => '13:10', 'status' => 'btn-success'],
            ['start' => '13:11', 'end' => '13:16', 'status' => 'btn-success'],
            ['start' => '13:17', 'end' => '13:22', 'status' => 'btn-success'],
            ['start' => '13:29', 'end' => '13:34', 'status' => 'btn-success'],
            ['start' => '13:35', 'end' => '13:40', 'status' => 'btn-success'],
            ['start' => '13:41', 'end' => '13:46', 'status' => 'btn-success'],
            ['start' => '13:47', 'end' => '13:52', 'status' => 'btn-success'],
        ],
        '14:**' => [
            ['start' => '14:05', 'end' => '14:10', 'status' => 'btn-success'],
            ['start' => '14:11', 'end' => '14:16', 'status' => 'btn-success'],
            ['start' => '14:17', 'end' => '14:22', 'status' => 'btn-success'],
            ['start' => '14:23', 'end' => '14:28', 'status' => 'btn-success'],
            ['start' => '14:29', 'end' => '14:34', 'status' => 'btn-success'],
        ],
        '15:**' => [
            ['start' => '15:11', 'end' => '15:16', 'status' => 'btn-success'],
            ['start' => '15:17', 'end' => '15:22', 'status' => 'btn-success'],
            ['start' => '15:23', 'end' => '15:28', 'status' => 'btn-success'],
            ['start' => '15:29', 'end' => '15:34', 'status' => 'btn-success'],
            ['start' => '15:35', 'end' => '15:40', 'status' => 'btn-success'],
            ['start' => '15:41', 'end' => '15:46', 'status' => 'btn-success'],
        ],
        '16:**' => [
            ['start' => '16:17', 'end' => '16:22', 'status' => 'btn-success'],
            ['start' => '16:23', 'end' => '16:28', 'status' => 'btn-success'],
            ['start' => '16:29', 'end' => '16:34', 'status' => 'btn-success'],
            ['start' => '16:35', 'end' => '16:40', 'status' => 'btn-success'],
        ],
        '17:**' => [
            ['start' => '17:05', 'end' => '17:10', 'status' => 'btn-success'],
            ['start' => '17:11', 'end' => '17:16', 'status' => 'btn-success'],
            ['start' => '17:17', 'end' => '17:22', 'status' => 'btn-success'],
            ['start' => '17:23', 'end' => '17:28', 'status' => 'btn-success'],
            ['start' => '17:29', 'end' => '17:34', 'status' => 'btn-success'],
            ['start' => '17:35', 'end' => '17:40', 'status' => 'btn-success'],
            ['start' => '17:41', 'end' => '17:46', 'status' => 'btn-success'],
            ['start' => '17:47', 'end' => '17:52', 'status' => 'btn-success'],
            ['start' => '17:53', 'end' => '17:58', 'status' => 'btn-success'],
        ],
        '18:**' => [
            ['start' => '18:05', 'end' => '18:10', 'status' => 'btn-success'],
            ['start' => '18:11', 'end' => '18:16', 'status' => 'btn-success'],
            ['start' => '18:17', 'end' => '18:22', 'status' => 'btn-success'],
            ['start' => '18:23', 'end' => '18:28', 'status' => 'btn-success'],
            ['start' => '18:29', 'end' => '18:34', 'status' => 'btn-success'],
            ['start' => '18:35', 'end' => '18:40', 'status' => 'btn-success'],
            ['start' => '18:41', 'end' => '18:46', 'status' => 'btn-success'],
            ['start' => '18:47', 'end' => '18:52', 'status' => 'btn-success'],
            ['start' => '18:53', 'end' => '18:58', 'status' => 'btn-success'],
        ],
    ];

    return view('test', [
        'hours' => $hours,
    ]);
});

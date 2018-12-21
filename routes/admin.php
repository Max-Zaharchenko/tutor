<?php

$router->get('/', 'Dashboard\DashboardController@index')->name('admin.dashboard.index');

// Invites
$router->post('/invites', 'Students\InvitesController@store')->name('admin.invites.store');

// Students
$router->get('/students', 'Students\StudentsController@index')->name('admin.students.index');

// Courses
$router->get('/courses', 'Courses\CoursesController@index')->name('admin.courses.index');
$router->get('/courses/create', 'Courses\CoursesController@create')->name('admin.courses.create');
$router->post('/courses', 'Courses\CoursesController@store')->name('admin.courses.store');
$router->get('/courses/{courseSlug}', 'Courses\CoursesController@show')->name('admin.courses.show');
$router->get('/courses/{courseSlug}/activate', 'Courses\CoursesController@activate')->name('admin.courses.activate');
$router->get('/courses/{courseSlug}/deactivate', 'Courses\CoursesController@deactivate')->name('admin.courses.deactivate');

// Courses Lessons
$router->get('/courses/{courseSlug}/lessons/create', 'Courses\LessonsController@create')->name('admin.lessons.create');
$router->post('/courses/{courseSlug}/lessons', 'Courses\LessonsController@store')->name('admin.lessons.store');
$router->get('/courses/{courseSlug}/lessons/{lessonSlug}', 'Courses\LessonsController@show')->name('admin.lessons.show');

// Calls
$router->get('/calls', 'Calls\CallsController@index')->name('admin.calls.index');
$router->get('/calls/{call}', 'Calls\CallsController@show')->name('admin.calls.show');

// Vocabulary
$router->get('/vocabulary', 'Vocabulary\VocabularyController@index')->name('admin.vocabulary.index');

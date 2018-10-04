<?php

$router->get('/', 'Dashboard\DashboardController@index')->name('admin.dashboard.index');

// Students
$router->get('/students', 'Students\StudentsController@index')->name('admin.students.index');

// Courses
$router->get('/courses', 'Courses\CoursesController@index')->name('admin.courses.index');
$router->get('/courses/create', 'Courses\CoursesController@create')->name('admin.courses.create');
$router->post('/courses', 'Courses\CoursesController@store')->name('admin.courses.store');
$router->get('/courses/{course}', 'Courses\CoursesController@show')->name('admin.courses.show');

// Courses Lessons
$router->get('/courses/{course}/lessons/create', 'Courses\LessonsController@create')->name('admin.lessons.create');
$router->post('/courses/{course}/lessons', 'Courses\LessonsController@store')->name('admin.lessons.store');

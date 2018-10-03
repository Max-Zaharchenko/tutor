<?php

$router->get('/', 'Dashboard\DashboardController@index')->name('admin.dashboard.index');

// Courses
$router->get('/courses', 'Courses\CoursesController@index')->name('admin.courses.index');
$router->get('/courses/create', 'Courses\CoursesController@create')->name('admin.courses.create');
$router->post('/courses', 'Courses\CoursesController@store')->name('admin.courses.store');

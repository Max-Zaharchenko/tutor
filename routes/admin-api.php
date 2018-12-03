<?php

// Words
$router->put('/lessons/{lesson}/words', 'Courses\LessonWordsController@update')->name('api.words');

// Courses
$router->get('/courses', 'Courses\CoursesController@index');
$router->post('/courses/{course}/calls', 'Courses\CallsController@store');

// Calls
$router->get('/calls', 'Calls\CallsController@index');

// Vocabulary
$router->get('/vocabulary', 'Vocabulary\VocabularyController@index');
$router->post('/vocabulary', 'Vocabulary\VocabularyController@store');

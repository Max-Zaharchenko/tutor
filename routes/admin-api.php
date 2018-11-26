<?php

// Words
$router->put('/lessons/{lesson}/words', 'Courses\LessonWordsController@update')->name('api.words');

// Vocabulary
$router->get('/vocabulary', 'Vocabulary\VocabularyController@index');
$router->post('/vocabulary', 'Vocabulary\VocabularyController@store');

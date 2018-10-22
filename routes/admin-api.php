<?php

$router->put('/lessons/{lesson}/words', 'Courses\LessonWordsController@update')->name('api.words');

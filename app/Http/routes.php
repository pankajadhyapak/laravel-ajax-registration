<?php

Route::get('/','RegisterController@getRegister');

Route::post('/register','RegisterController@postRegister');
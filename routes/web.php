<?php

Route::name('home')->get('/', 'IndexController@show');

Route::name('welcome-email.send')->post('/send-welcome-email', 'IndexController@store');

<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'MainController@getMain');
    Route::post('/lorem', 'LoremController@postLorem');
    Route::post('/user', 'UserController@postUser');

});

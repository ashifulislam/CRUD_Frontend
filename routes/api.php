<?php

Route::group([

    'middleware' => 'api',
//    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'JWTAuthController@login');
    Route::post('logout', 'JWTAuthController@logout');
    Route::post('refresh', 'JWTAuthController@refresh');
    Route::post('me', 'JWTAuthController@me');
    Route::post('payload','JWTAuthController@payload');
    Route::apiResource('product','API\ProductController');
});



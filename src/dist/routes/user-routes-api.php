<?php

Route::middleware(['api'])->prefix('api')->group(function () {


    Route::get('/user', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\UserApiController@index')
         ->name('list.user.api');

    Route::get('/user/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\UserApiController@show')
         ->name('show.user.api');

    Route::post('/user', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\UserApiController@store')
         ->name('store.user.api');

    Route::put('/user/{id}', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\UserApiController@update')
         ->name('update.user.api');

    Route::delete('/user/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\UserApiController@destroy')
         ->name('destroy.user.api');
});

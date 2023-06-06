<?php

Route::middleware(['api', "auth:sanctum"])->prefix('api')->group(function () {


    Route::get('/command', '\SJoussin\Http\Controllers\CommandApiController@index')
         ->name('list.command.api');

    Route::get('/command/{id}','\SJoussin\Http\Controllers\CommandApiController@show')
         ->name('show.command.api');

    Route::post('/command', '\SJoussin\Http\Controllers\CommandApiController@store')
         ->name('store.command.api');

    Route::put('/command/{id}', '\SJoussin\Http\Controllers\CommandApiController@update')
         ->name('update.command.api');

    Route::delete('/command/{id}','\SJoussin\Http\Controllers\CommandApiController@destroy')
         ->name('destroy.command.api');
});

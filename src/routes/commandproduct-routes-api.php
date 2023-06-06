<?php

Route::middleware(['api', 'auth:sanctum'])->prefix('api')->group(function () {


    Route::get('/commandproduct', '\SJoussin\Http\Controllers\CommandProductApiController@index')
         ->name('list.commandproduct.api');

    Route::get('/commandproduct/{id}','\SJoussin\Http\Controllers\CommandProductApiController@show')
         ->name('show.commandproduct.api');

    Route::post('/commandproduct', '\SJoussin\Http\Controllers\CommandProductApiController@store')
         ->name('store.commandproduct.api');

    Route::put('/commandproduct/{id}', '\SJoussin\Http\Controllers\CommandProductApiController@update')
         ->name('update.commandproduct.api');

    Route::delete('/commandproduct/{id}','\SJoussin\Http\Controllers\CommandProductApiController@destroy')
         ->name('destroy.commandproduct.api');
});

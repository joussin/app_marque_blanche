<?php

Route::middleware(['api'])->prefix('api')->group(function () {


    Route::get('/commandproduct', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductApiController@index')
         ->name('list.commandproduct.api');

    Route::get('/commandproduct/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductApiController@show')
         ->name('show.commandproduct.api');

    Route::post('/commandproduct', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductApiController@store')
         ->name('store.commandproduct.api');

    Route::put('/commandproduct/{id}', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductApiController@update')
         ->name('update.commandproduct.api');

    Route::delete('/commandproduct/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductApiController@destroy')
         ->name('destroy.commandproduct.api');
});

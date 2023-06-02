<?php

Route::middleware(['api'])->prefix('api')->group(function () {


    Route::get('/command', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandApiController@index')
         ->name('list.command.api');

    Route::get('/command/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandApiController@show')
         ->name('show.command.api');

    Route::post('/command', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandApiController@store')
         ->name('store.command.api');

    Route::put('/command/{id}', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandApiController@update')
         ->name('update.command.api');

    Route::delete('/command/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandApiController@destroy')
         ->name('destroy.command.api');
});

<?php

Route::middleware(['web'])->prefix('')->group(function () {

    Route::get('/command', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandController@index')
         ->name('list.command.front');

    Route::get('/command/create','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandController@create')
         ->name('create.command.front');

    Route::get('/command/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandController@show')
         ->name('show.command.front');

    Route::get('/command/{id}/edit','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandController@edit')
         ->name('edit.command.front');

    Route::post('/command', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandController@store')
         ->name('store.command.front');

    Route::put('/command/{id}', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandController@update')
         ->name('update.command.front');

    Route::delete('/command/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandController@destroy')
         ->name('destroy.command.front');
});

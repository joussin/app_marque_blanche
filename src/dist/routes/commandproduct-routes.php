<?php

Route::middleware(['web'])->prefix('')->group(function () {

    Route::get('/commandproduct', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductController@index')
         ->name('list.commandproduct.front');

    Route::get('/commandproduct/create','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductController@create')
         ->name('create.commandproduct.front');

    Route::get('/commandproduct/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductController@show')
         ->name('show.commandproduct.front');

    Route::get('/commandproduct/{id}/edit','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductController@edit')
         ->name('edit.commandproduct.front');

    Route::post('/commandproduct', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductController@store')
         ->name('store.commandproduct.front');

    Route::put('/commandproduct/{id}', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductController@update')
         ->name('update.commandproduct.front');

    Route::delete('/commandproduct/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductController@destroy')
         ->name('destroy.commandproduct.front');
});

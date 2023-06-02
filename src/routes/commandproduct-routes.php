<?php

Route::middleware(['web'])->prefix('')->group(function () {

    Route::get('/commandproduct', '\SJoussin\Http\Controllers\CommandProductController@index')
         ->name('list.commandproduct.front');

    Route::get('/commandproduct/create','\SJoussin\Http\Controllers\CommandProductController@create')
         ->name('create.commandproduct.front');

    Route::get('/commandproduct/{id}','\SJoussin\Http\Controllers\CommandProductController@show')
         ->name('show.commandproduct.front');

    Route::get('/commandproduct/{id}/edit','\SJoussin\Http\Controllers\CommandProductController@edit')
         ->name('edit.commandproduct.front');

    Route::post('/commandproduct', '\SJoussin\Http\Controllers\CommandProductController@store')
         ->name('store.commandproduct.front');

    Route::put('/commandproduct/{id}', '\SJoussin\Http\Controllers\CommandProductController@update')
         ->name('update.commandproduct.front');

    Route::delete('/commandproduct/{id}','\SJoussin\Http\Controllers\CommandProductController@destroy')
         ->name('destroy.commandproduct.front');
});

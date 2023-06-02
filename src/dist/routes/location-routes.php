<?php

Route::middleware(['web'])->prefix('')->group(function () {

    Route::get('/location', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\LocationController@index')
         ->name('list.location.front');

    Route::get('/location/create','\SJoussin\LaravelScaffolder\dist\Http\Controllers\LocationController@create')
         ->name('create.location.front');

    Route::get('/location/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\LocationController@show')
         ->name('show.location.front');

    Route::get('/location/{id}/edit','\SJoussin\LaravelScaffolder\dist\Http\Controllers\LocationController@edit')
         ->name('edit.location.front');

    Route::post('/location', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\LocationController@store')
         ->name('store.location.front');

    Route::put('/location/{id}', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\LocationController@update')
         ->name('update.location.front');

    Route::delete('/location/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\LocationController@destroy')
         ->name('destroy.location.front');
});

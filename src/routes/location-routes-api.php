<?php

Route::middleware(['api'])->prefix('api')->group(function () {


    Route::get('/location', '\SJoussin\Http\Controllers\LocationApiController@index')
         ->name('list.location.api');

    Route::get('/location/{id}','\SJoussin\Http\Controllers\LocationApiController@show')
         ->name('show.location.api');

    Route::post('/location', '\SJoussin\Http\Controllers\LocationApiController@store')
         ->name('store.location.api');

    Route::put('/location/{id}', '\SJoussin\Http\Controllers\LocationApiController@update')
         ->name('update.location.api');

    Route::delete('/location/{id}','\SJoussin\Http\Controllers\LocationApiController@destroy')
         ->name('destroy.location.api');
});

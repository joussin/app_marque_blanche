<?php

Route::middleware(['api'])->prefix('api')->group(function () {


    Route::get('/delivery', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryApiController@index')
         ->name('list.delivery.api');

    Route::get('/delivery/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryApiController@show')
         ->name('show.delivery.api');

    Route::post('/delivery', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryApiController@store')
         ->name('store.delivery.api');

    Route::put('/delivery/{id}', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryApiController@update')
         ->name('update.delivery.api');

    Route::delete('/delivery/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryApiController@destroy')
         ->name('destroy.delivery.api');
});

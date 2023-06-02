<?php

Route::middleware(['web'])->prefix('')->group(function () {

    Route::get('/delivery', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryController@index')
         ->name('list.delivery.front');

    Route::get('/delivery/create','\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryController@create')
         ->name('create.delivery.front');

    Route::get('/delivery/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryController@show')
         ->name('show.delivery.front');

    Route::get('/delivery/{id}/edit','\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryController@edit')
         ->name('edit.delivery.front');

    Route::post('/delivery', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryController@store')
         ->name('store.delivery.front');

    Route::put('/delivery/{id}', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryController@update')
         ->name('update.delivery.front');

    Route::delete('/delivery/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryController@destroy')
         ->name('destroy.delivery.front');
});

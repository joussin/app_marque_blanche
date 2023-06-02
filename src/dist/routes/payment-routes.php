<?php

Route::middleware(['web'])->prefix('')->group(function () {

    Route::get('/payment', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\PaymentController@index')
         ->name('list.payment.front');

    Route::get('/payment/create','\SJoussin\LaravelScaffolder\dist\Http\Controllers\PaymentController@create')
         ->name('create.payment.front');

    Route::get('/payment/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\PaymentController@show')
         ->name('show.payment.front');

    Route::get('/payment/{id}/edit','\SJoussin\LaravelScaffolder\dist\Http\Controllers\PaymentController@edit')
         ->name('edit.payment.front');

    Route::post('/payment', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\PaymentController@store')
         ->name('store.payment.front');

    Route::put('/payment/{id}', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\PaymentController@update')
         ->name('update.payment.front');

    Route::delete('/payment/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\PaymentController@destroy')
         ->name('destroy.payment.front');
});

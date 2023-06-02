<?php

Route::middleware(['web'])->prefix('')->group(function () {

    Route::get('/payment', '\SJoussin\Http\Controllers\PaymentController@index')
         ->name('list.payment.front');

    Route::get('/payment/create','\SJoussin\Http\Controllers\PaymentController@create')
         ->name('create.payment.front');

    Route::get('/payment/{id}','\SJoussin\Http\Controllers\PaymentController@show')
         ->name('show.payment.front');

    Route::get('/payment/{id}/edit','\SJoussin\Http\Controllers\PaymentController@edit')
         ->name('edit.payment.front');

    Route::post('/payment', '\SJoussin\Http\Controllers\PaymentController@store')
         ->name('store.payment.front');

    Route::put('/payment/{id}', '\SJoussin\Http\Controllers\PaymentController@update')
         ->name('update.payment.front');

    Route::delete('/payment/{id}','\SJoussin\Http\Controllers\PaymentController@destroy')
         ->name('destroy.payment.front');
});

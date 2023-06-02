<?php

Route::prefix("api")->group(function () {
    Route::apiResource('product', \SJoussin\LaravelScaffolder\dist\Http\Controllers\ProductApiController::class);
});


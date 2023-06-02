<?php

Route::prefix("api")->group(function () {
    Route::apiResource('product', \SJoussin\Http\Controllers\ProductApiController::class);
});


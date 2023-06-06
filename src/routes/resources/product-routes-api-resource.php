<?php

Route::middleware(["auth:sanctum"])->prefix("api")->group(function () {
    Route::apiResource('product', \SJoussin\Http\Controllers\ProductApiController::class);
});


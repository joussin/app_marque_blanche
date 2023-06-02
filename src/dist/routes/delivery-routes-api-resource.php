<?php

Route::prefix("api")->group(function () {
    Route::apiResource('delivery', \SJoussin\LaravelScaffolder\dist\Http\Controllers\DeliveryApiController::class);
});


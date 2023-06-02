<?php

Route::prefix("api")->group(function () {
    Route::apiResource('location', \SJoussin\LaravelScaffolder\dist\Http\Controllers\LocationApiController::class);
});


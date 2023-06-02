<?php

Route::prefix("api")->group(function () {
    Route::apiResource('command', \SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandApiController::class);
});


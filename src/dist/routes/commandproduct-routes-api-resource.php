<?php

Route::prefix("api")->group(function () {
    Route::apiResource('commandproduct', \SJoussin\LaravelScaffolder\dist\Http\Controllers\CommandProductApiController::class);
});


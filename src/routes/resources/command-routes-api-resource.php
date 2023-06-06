<?php

Route::middleware(["auth:sanctum"])->prefix("api")->group(function () {
    Route::apiResource('command', \SJoussin\Http\Controllers\CommandApiController::class);
});


<?php

Route::prefix("api")->group(function () {
    Route::apiResource('user', \SJoussin\LaravelScaffolder\dist\Http\Controllers\UserApiController::class);
});


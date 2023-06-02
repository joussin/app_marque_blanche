<?php

namespace SJoussin\LaravelScaffolder\dist\ValidationRules;

use Illuminate\Http\Resources\Json\JsonResource;

class LocationValidationRules extends JsonResource
{
    public const RULES = [
'user_id' => 'nullable|integer',

'lat' => 'required|decimal:0,2',

'long' => 'required|decimal:0,2',

'address' => 'required|string',


    ];
}

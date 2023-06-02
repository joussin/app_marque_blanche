<?php

namespace SJoussin\LaravelScaffolder\dist\ValidationRules;

use Illuminate\Http\Resources\Json\JsonResource;

class CommandValidationRules extends JsonResource
{
    public const RULES = [
'user_id' => 'required|integer',

'date' => 'required|date',

'status' => 'required|string',


    ];
}

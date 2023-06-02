<?php

namespace SJoussin\ValidationRules;

use Illuminate\Http\Resources\Json\JsonResource;

class CommandProductValidationRules extends JsonResource
{
    public const RULES = [
'command_id' => 'required|integer',

'product_id' => 'required|integer',


    ];
}

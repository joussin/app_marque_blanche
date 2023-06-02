<?php

namespace SJoussin\ValidationRules;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentValidationRules extends JsonResource
{
    public const RULES = [
'command_id' => 'required|integer',

'type' => 'required|string',

'status' => 'required|string',


    ];
}

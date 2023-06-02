<?php

namespace SJoussin\ValidationRules;

use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryValidationRules extends JsonResource
{
    public const RULES = [
'command_id' => 'required|integer',

'delivery_user_id' => 'required|integer',

'date_start' => 'required|date',

'date_finish_estimation' => 'required|date',

'date_finish' => 'required|date',

'status' => 'required|string',


    ];
}

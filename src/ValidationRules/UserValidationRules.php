<?php

namespace SJoussin\ValidationRules;

use Illuminate\Http\Resources\Json\JsonResource;

class UserValidationRules extends JsonResource
{
    public const RULES = [
'phone' => 'required|string',

'username' => 'required|string',

'password' => 'required|string',

'role' => 'required|string',


    ];
}

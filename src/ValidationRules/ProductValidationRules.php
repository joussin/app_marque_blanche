<?php

namespace SJoussin\ValidationRules;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductValidationRules extends JsonResource
{
    public const RULES = [
'name' => 'required|string',

'description' => 'required|string',

'price' => 'required|integer',

'image' => 'required|string',

'available' => 'required|boolean',


    ];
}

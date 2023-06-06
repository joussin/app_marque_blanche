<?php

namespace SJoussin\ValidationRules;

use Illuminate\Http\Resources\Json\JsonResource;

class UserValidationRules extends JsonResource
{
    public const RULES_REGISTER = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
    ];

    public const RULES_LOGIN = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public const RULES_LOGIN_PHONE = [
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'password' => 'required'
    ];

    public const RULES_TOKEN = [
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required|string',
    ];

    public const RULES_UPDATE = [
        'name' => 'string',
        'email'=> 'email',
        'phone' => "regex:/^([0-9\s\-\+\(\)]*)$/|min:10",
    ];


}

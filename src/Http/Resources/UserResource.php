<?php

namespace SJoussin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class UserResource extends JsonResource
{

   /**
     * Indicates if the resource's collection keys should be preserved.
     *
     * @var bool
     */
    public $preserveKeys = true;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
           'name' => $this->id,
           'email' => $this->email,
           'email_verified_at' => $this->email_verified_at,
//           'password' => $this->password, //'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//           'remember_token' => Str::random(10),
           'phone' => $this->phone,
//           'role' => $this->role,

           'location' => LocationResource::collection($this->whenLoaded('location')),

        ];
    }
}


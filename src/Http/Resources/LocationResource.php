<?php

namespace SJoussin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LocationResource extends JsonResource
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
           'id' => $this->id,

           'user_id' => $this->user_id,

           'lat' => $this->lat,

           'long' => $this->long,

           'address' => $this->address,

//           'user' => new UserResource($this->whenLoaded('user'))

        ];
    }
}


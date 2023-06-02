<?php

namespace SJoussin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommandProductResource extends JsonResource
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
           'command_id' => $this->command_id,

           'product_id' => $this->product_id,


        ];
    }
}


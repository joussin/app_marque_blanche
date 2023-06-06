<?php

namespace SJoussin\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryResource extends JsonResource
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

           'command_id' => $this->command_id,

           'delivery_user_id' => $this->delivery_user_id,

           'date_start' => $this->date_start,

           'date_finish_estimation' => $this->date_finish_estimation,

           'date_finish' => $this->date_finish,

           'status' => $this->status,

           'command' => new CommandResource($this->whenLoaded('command'))
        ];
    }
}


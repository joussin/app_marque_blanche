<?php

namespace SJoussin\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\>
 */
class DeliveryFactory extends Factory
{

    protected $model = \SJoussin\Models\Delivery::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'command_id' => null,

           'delivery_user_id' => null,

           'date_start' => null,

           'date_finish_estimation' => null,

           'date_finish' => null,

           'status' => null,


        ];
    }
}

<?php

namespace SJoussin\LaravelScaffolder\dist\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\>
 */
class PaymentFactory extends Factory
{

    protected $model = \SJoussin\LaravelScaffolder\dist\Models\Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'command_id' => null,

           'type' => null,

           'status' => null,


        ];
    }
}

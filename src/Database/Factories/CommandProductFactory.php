<?php

namespace SJoussin\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\>
 */
class CommandProductFactory extends Factory
{

    protected $model = \SJoussin\Models\CommandProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'command_id' => null,

           'product_id' => null,


        ];
    }
}

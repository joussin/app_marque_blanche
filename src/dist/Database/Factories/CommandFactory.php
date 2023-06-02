<?php

namespace SJoussin\LaravelScaffolder\dist\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\>
 */
class CommandFactory extends Factory
{

    protected $model = \SJoussin\LaravelScaffolder\dist\Models\Command::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'user_id' => null,

           'date' => null,

           'status' => 'CART',


        ];
    }
}

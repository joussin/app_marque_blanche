<?php

namespace SJoussin\LaravelScaffolder\dist\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\>
 */
class ProductFactory extends Factory
{

    protected $model = \SJoussin\LaravelScaffolder\dist\Models\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name' => null,

           'description' => null,

           'price' => null,

           'image' => null,

           'available' => null,


        ];
    }
}

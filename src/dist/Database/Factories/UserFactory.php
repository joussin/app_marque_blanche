<?php

namespace SJoussin\LaravelScaffolder\dist\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\>
 */
class UserFactory extends Factory
{

    protected $model = \SJoussin\LaravelScaffolder\dist\Models\User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'phone' => null,

           'username' => null,

           'password' => null,

           'role' => null,


        ];
    }
}

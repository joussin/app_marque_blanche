<?php

namespace SJoussin\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = \SJoussin\Models\Product::factory()->create([
                       'name' => null,

           'description' => null,

           'price' => null,

           'image' => null,

           'available' => null,


        ]);
    }
}

<?php

namespace SJoussin\LaravelScaffolder\dist\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Location::factory()->create([
                       'user_id' => '1',

           'lat' => '9.0',

           'long' => '1.10',

           'address' => null,


        ]);
    }
}

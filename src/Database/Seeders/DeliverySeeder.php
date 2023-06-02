<?php

namespace SJoussin\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = \SJoussin\Models\Delivery::factory()->create([
                       'command_id' => null,

           'delivery_user_id' => null,

           'date_start' => null,

           'date_finish_estimation' => null,

           'date_finish' => null,

           'status' => null,


        ]);
    }
}

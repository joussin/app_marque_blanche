<?php

namespace SJoussin\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = \SJoussin\Models\Payment::factory()->create([
                       'command_id' => null,

           'type' => null,

           'status' => null,


        ]);
    }
}

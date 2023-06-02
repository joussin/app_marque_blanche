<?php

namespace SJoussin\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommandProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = \SJoussin\Models\CommandProduct::factory()->create([
                       'command_id' => null,

           'product_id' => null,


        ]);
    }
}

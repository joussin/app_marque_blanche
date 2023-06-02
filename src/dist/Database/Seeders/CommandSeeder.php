<?php

namespace SJoussin\LaravelScaffolder\dist\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = \SJoussin\LaravelScaffolder\dist\Models\Command::factory()->create([
                       'user_id' => null,

           'date' => null,

           'status' => null,


        ]);
    }
}

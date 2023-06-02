<?php

namespace SJoussin\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = \SJoussin\Models\UserModel::factory()->create([
                       'phone' => null,

           'username' => null,

           'password' => null,

           'role' => null,


        ]);
    }
}

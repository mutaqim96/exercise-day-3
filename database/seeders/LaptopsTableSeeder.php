<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laptops')->insert([
            'title' => 'Dell 5559',
            'description' => '20215 Model Inspiron',
            'student' => 'Mutaqim Hamid'
        ]);
    }
}

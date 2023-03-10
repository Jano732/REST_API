<?php

namespace Database\Seeders;

use http\Env\Response;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class people_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++)
        {
            DB::table('people')->insert([
                'name'=>Str::random(20),
                'surname'=>Str::random(40),
                'street'=>Str::random(40),
                'city'=>Str::random(30),
                'phone_number'=>rand(100000000,999999999)
            ]);
        }
    }
}

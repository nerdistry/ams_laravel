<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::Table('staff')->insert([
            "name"=>Str::random(10).'name',
            "email"=>Str::random(10).'@gmail.com',
           "phone_number"=>Str::random(10),
            ]);
    
    }
}

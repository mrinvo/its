<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            
            'name' => 'CAIRO',
            'country_id' => 1

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'ALEXANDRIA',

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'GHARBIA',

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'NEW YORK',

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'MIAMI',

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'CLEVLAND',

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'DUBAI',

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'ABU DABHI',

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'AJMAN',

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'OXFORD',

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'CAMBRIDGE',

            
        ]);
        DB::table('cities')->insert([
            
            'name' => 'LONDON',

            
        ]);
        //
    }
}

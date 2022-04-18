<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            
            
            'name' => 'EGYPT',
            
        ]);
        DB::table('countries')->insert([
            
            'name' => 'USA',
            
        ]);
        DB::table('countries')->insert([
            
            'name' => 'UK',
            
        ]);
        DB::table('countries')->insert([
            
            'name' => 'UAE',
            
        ]);
        DB::table('countries')->insert([
            
            'name' => 'SUDAN',
            
        ]);
        DB::table('countries')->insert([
            
            'name' => 'QATAR',
            
        ]);
        DB::table('countries')->insert([
            
            'name' => 'FRANCE',
            
        ]);
        DB::table('countries')->insert([
            
            'name' => 'GERMANY',
            
        ]);
        DB::table('countries')->insert([
            
            'name' => 'BRAZIL',
            
        ]);
        DB::table('countries')->insert([
            
            'name' => 'MEXICO',
            
        ]);
        
    }
}

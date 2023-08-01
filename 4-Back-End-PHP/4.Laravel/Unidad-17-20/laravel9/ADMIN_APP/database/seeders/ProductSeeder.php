<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('product')->insert([
                'category_id' => rand(1,10),
                'name' => Str::random(),
                'description' => Str::random(100),
                'price' => rand(0,1000),
                'tax_percent' => rand(0,100),
                'quantity' => rand(1,20),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
        
    }
}

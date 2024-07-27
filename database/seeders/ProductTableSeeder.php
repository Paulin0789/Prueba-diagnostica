<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $brand=1;
        for ($i=0; $i < 50; $i++) { 
            DB::table('product')->insert([
                'name' => Str::random(10),
                'brand_id' => $brand,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]); 
            if ($i!=0 && $i %5 == 0) {
                $brand=$brand+1;
            } 
        }
    }
}

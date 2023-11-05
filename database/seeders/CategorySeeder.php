<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            "name"=>"Elektronik"
        ]);
        DB::table("categories")->insert([
            "name"=>"Bilgisayar / Tablet",
            "category_id"=>1
        ]);
        DB::table("categories")->insert([
            "name"=>"Yazıcılar ve Projeksiyon",
            "category_id"=>1
        ]);

        DB::table("categories")->insert([
            "name"=>"Moda"
        ]);
    }
}

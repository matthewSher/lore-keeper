<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Персонажи', 'slug' => 'characters'],
            ['name' => 'Локации', 'slug' => 'locations'],
            ['name' => 'События', 'slug' => 'events'],
        ];

        DB::table('categories')->insert($categories);
    }
}

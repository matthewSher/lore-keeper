<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Роли пользователей.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Пользователь'],
            ['name' => 'Автор'],
            ['name' => 'Админ'],
        ];

        DB::table('roles')->insert($roles);
    }
}

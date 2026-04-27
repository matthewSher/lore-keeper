<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Создание пользователей всех ролей для разработки.
     *
     * Роли (из RoleSeeder):
     *   1 — Пользователь
     *   2 — Автор
     *   3 — Админ
     */
    public function run(): void
    {
        // ──── Администратор ────
        User::create([
            'role_id'           => 3,
            'name'              => 'Администратор',
            'email'             => 'admin@lorekeeper.test',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // ──── Авторы ────
        User::create([
            'role_id'           => 2,
            'name'              => 'Алиса Лоркрафт',
            'email'             => 'alice@lorekeeper.test',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'role_id'           => 2,
            'name'              => 'Борис Мироздатель',
            'email'             => 'boris@lorekeeper.test',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'role_id'           => 2,
            'name'              => 'Виктория Сказочница',
            'email'             => 'victoria@lorekeeper.test',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // ──── Обычные пользователи (читатели) ────
        User::create([
            'role_id'           => 1,
            'name'              => 'Денис Читатель',
            'email'             => 'denis@lorekeeper.test',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'role_id'           => 1,
            'name'              => 'Елена Обозреватель',
            'email'             => 'elena@lorekeeper.test',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'role_id'           => 1,
            'name'              => 'Фёдор Критик',
            'email'             => 'fedor@lorekeeper.test',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // ──── Заблокированный пользователь (для тестирования UC-11) ────
        User::create([
            'role_id'           => 2,
            'name'              => 'Григорий Нарушитель',
            'email'             => 'blocked@lorekeeper.test',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
            'is_blocked'        => true,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Глобальные теги платформы.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Фэнтези',           'slug' => 'fantasy'],
            ['name' => 'Научная фантастика', 'slug' => 'sci-fi'],
            ['name' => 'Тёмное фэнтези',    'slug' => 'dark-fantasy'],
            ['name' => 'Киберпанк',          'slug' => 'cyberpunk'],
            ['name' => 'Постапокалипсис',    'slug' => 'post-apocalypse'],
            ['name' => 'Стимпанк',           'slug' => 'steampunk'],
            ['name' => 'Мифология',          'slug' => 'mythology'],
            ['name' => 'Магия',              'slug' => 'magic'],
            ['name' => 'Война',              'slug' => 'war'],
            ['name' => 'Политика',           'slug' => 'politics'],
            ['name' => 'Древний мир',        'slug' => 'ancient-world'],
            ['name' => 'Средневековье',      'slug' => 'medieval'],
            ['name' => 'Космос',             'slug' => 'space'],
            ['name' => 'Драконы',            'slug' => 'dragons'],
            ['name' => 'Некромантия',        'slug' => 'necromancy'],
            ['name' => 'Королевства',        'slug' => 'kingdoms'],
            ['name' => 'Пираты',             'slug' => 'pirates'],
            ['name' => 'Подземелья',         'slug' => 'dungeons'],
            ['name' => 'Роботы',             'slug' => 'robots'],
            ['name' => 'Путешествия',        'slug' => 'travel'],
        ];

        DB::table('tags')->insert($tags);
    }
}

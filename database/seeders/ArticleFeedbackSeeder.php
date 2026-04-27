<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleFeedbackSeeder extends Seeder
{
    /**
     * Оценки и комментарии от пользователей к опубликованным статьям.
     *
     * Пользователи-читатели (из UserSeeder):
     *   5 — Денис
     *   6 — Елена
     *   7 — Фёдор
     */
    public function run(): void
    {
        $feedback = [
            // Эльдрик Штормовой Клинок (article_id = 1)
            [
                'article_id' => 1,
                'user_id'    => 5,
                'rating'     => 5,
                'comment'    => 'Потрясающая проработка персонажа! Особенно понравилась система способностей и связь с Эфирными Источниками.',
            ],
            [
                'article_id' => 1,
                'user_id'    => 6,
                'rating'     => 4,
                'comment'    => 'Хороший персонаж, но хотелось бы больше деталей о его прошлом в Серебряном Ордене.',
            ],
            [
                'article_id' => 1,
                'user_id'    => 7,
                'rating'     => 5,
                'comment'    => null,
            ],

            // Лирана Вечерняя Звезда (article_id = 2)
            [
                'article_id' => 2,
                'user_id'    => 5,
                'rating'     => 5,
                'comment'    => 'Прекрасно написано! Лирана — очень живой и вдохновляющий персонаж.',
            ],
            [
                'article_id' => 2,
                'user_id'    => 7,
                'rating'     => 4,
                'comment'    => 'Интересная концепция Лунного Оракула. Будет ли продолжение?',
            ],

            // Кинбарская крепость (article_id = 3)
            [
                'article_id' => 3,
                'user_id'    => 6,
                'rating'     => 5,
                'comment'    => 'Шикарная локация! Таблица с местами внутри крепости — отличная идея.',
            ],
            [
                'article_id' => 3,
                'user_id'    => 7,
                'rating'     => 5,
                'comment'    => 'Одна из лучших статей на платформе. Хочу больше таких подробных описаний!',
            ],

            // Битва Чёрного Прилива (article_id = 5)
            [
                'article_id' => 5,
                'user_id'    => 5,
                'rating'     => 5,
                'comment'    => 'Самая эпичная битва во всей Эфирии! Очень динамичное описание.',
            ],
            [
                'article_id' => 5,
                'user_id'    => 6,
                'rating'     => 4,
                'comment'    => 'Хорошо, но хотелось бы больше о мотивации Зефирота.',
            ],
            [
                'article_id' => 5,
                'user_id'    => 7,
                'rating'     => 5,
                'comment'    => null,
            ],

            // Рэй «Глитч» Номура (article_id = 6)
            [
                'article_id' => 6,
                'user_id'    => 5,
                'rating'     => 4,
                'comment'    => 'Классический киберпанк-герой, но с интересным бэкграундом. Нравится!',
            ],
            [
                'article_id' => 6,
                'user_id'    => 6,
                'rating'     => 5,
                'comment'    => 'Импланты описаны очень круто. Хочу статью про OmniCorp!',
            ],

            // Сектор Зеро (article_id = 7)
            [
                'article_id' => 7,
                'user_id'    => 7,
                'rating'     => 5,
                'comment'    => 'Атмосферное описание. Прям чувствуешь себя там.',
            ],

            // Блэкаут 2185 (article_id = 8)
            [
                'article_id' => 8,
                'user_id'    => 5,
                'rating'     => 4,
                'comment'    => 'Важное событие для лора. Отлично раскрывает политическую ситуацию.',
            ],
            [
                'article_id' => 8,
                'user_id'    => 6,
                'rating'     => 3,
                'comment'    => 'Неплохо, но можно было бы добавить свидетельства очевидцев.',
            ],

            // Адмирал Кайра Вэнь (article_id = 9)
            [
                'article_id' => 9,
                'user_id'    => 5,
                'rating'     => 5,
                'comment'    => 'Великолепный персонаж! Дипломат и воин — отличное сочетание.',
            ],
            [
                'article_id' => 9,
                'user_id'    => 7,
                'rating'     => 4,
                'comment'    => null,
            ],

            // Станция «Перекрёсток» (article_id = 10)
            [
                'article_id' => 10,
                'user_id'    => 6,
                'rating'     => 5,
                'comment'    => 'Обалденная станция! Хочу карту секторов!',
            ],

            // Первый Контакт с Зел'кари (article_id = 11)
            [
                'article_id' => 11,
                'user_id'    => 5,
                'rating'     => 5,
                'comment'    => 'Ключевое событие! Хочу больше деталей о расе Зел\'кари.',
            ],
            [
                'article_id' => 11,
                'user_id'    => 6,
                'rating'     => 4,
                'comment'    => 'Интересно, но хронология могла бы быть подробнее.',
            ],
            [
                'article_id' => 11,
                'user_id'    => 7,
                'rating'     => 5,
                'comment'    => 'Лучшая статья о Конфедерации!',
            ],
        ];

        DB::table('article_feedback')->insert($feedback);
    }
}

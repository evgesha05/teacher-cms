<?php

use Faker\Generator as Faker;

/**
 * Фабрика для генерации категорий блога
 */
$factory->define(App\Category::class, function (Faker $faker) {
    return [
      'title' => $faker->word(1),
      'slug' => $faker->slug(),
      'parent_id' => 0,   // родительская категория
      'published' => 1,   // опубликованная категория
      'created_by' => 1,  // создана администратором
    ];
});

/**
 * Состояние для блога
 */
$factory->state(App\Category::class, 'blog', [
  'title' => 'Блог',
]);

/**
 * Состояние для учебных материалов
 */
$factory->state(App\Category::class, 'study', [
  'title' => 'Учебные материалы',
]);

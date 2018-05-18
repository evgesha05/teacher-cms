<?php

use Faker\Generator as Faker;

/**
 * Фабрика для создания записей блога
 */
$factory->define(App\Article::class, function (Faker $faker) {
    return [
      'title'=>  $faker->text(20),
      'slug'=> $faker->slug(),
      'description_short' => $faker->text(200),
      'description' => $faker->text(2000),
      'image' => 'https://placeimg.com/900/300/tech/sepia',
      'image_show' => 1,
      'meta_title' =>  $faker->word(10),
      'meta_description' =>  $faker->word(10),
      'meta_keyword' => $faker->word(10),
      'published'=>1,
      'created_by'=>1,
    ];
});

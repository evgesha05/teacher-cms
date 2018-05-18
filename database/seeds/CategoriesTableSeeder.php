<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 1)->states('blog')->create();
        factory(App\Category::class, 1)->states('study')->create();
    }
}

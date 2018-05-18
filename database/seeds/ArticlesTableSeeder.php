<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 40;
        factory(App\Article::class, $count)->create();
        for ($i=1; $i <= $count; $i++) {
            DB::table('categoryables')->insert(
                [
                  'category_id' => rand(1, 2),
                  'categoryable_id' => $i,
                  'categoryable_type' => 'App\Article'
                ]
            );
        }
    }
}

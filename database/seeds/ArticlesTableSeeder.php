<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $randomDate = $faker->dateTime($max = 'now', $timezone = null);

            $newArticle = new Article();
            $newArticle->title = $faker->text($maxNbChars = 40);
            $newArticle->subtitle = $faker->text($maxNbChars = 70);
            $newArticle->author = $faker->name($gender = null);
            $newArticle->text = $faker->text($maxNbChars = 250);
            $newArticle->created_at = $randomDate;
            $newArticle->updated_at = $randomDate;

            $newArticle->save();
        }
    }
}

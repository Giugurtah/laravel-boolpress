<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 25; $i++) {
            $post = new Post;
            $post->title = $faker->words(5, true);
            $post->content = $faker->paragraphs(3, true);
            $post->image = $faker->imageUrl(300,300,'animals');

            $post->category_id = rand(1, 5);
            $post->save();
        }
    }
}

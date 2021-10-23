<?php

use App\Models\Category;
use App\User; 

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
        $categories = Category::select('id')->pluck('id')->toArray();
        $users = User::select('id')->pluck('id')->toArray();

        for($i = 0; $i < 70; $i++) {
            $post = new Post;
            $post->title = $faker->words(5, true);
            $post->content = $faker->paragraphs(3, true);
            $post->image = $faker->imageUrl(300,300,'animals');
            
            $post->category_id = $categories[array_rand($categories, 1)];
            $post->user_id = $users[array_rand($users, 1)];
            $post->save();
        }
    }
}

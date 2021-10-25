<?php

use Illuminate\Database\Seeder;

use App\Models\Tag;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tags_list = ['Funny', 'Scary', 'Sad', 'Educational', 'humorous', 'Horror', 'Intresting'];

        foreach($tags_list as $tag) {
            $new_tag = new Tag;
            $new_tag->tag = $tag;
            $new_tag->color = $faker->safeHexColor();

            $new_tag->save();
        }
    }
}

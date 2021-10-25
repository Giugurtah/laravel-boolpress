<?php

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = [
            'Dramas', 'Advices', 'Adds', 'Recepies', 'Stories'
        ];
        
        foreach($categories as $category) {
            $new_category = new Category;
            $new_category->category = $category;
            $new_category->color = $faker->hexColor();
            $new_category->save();
        }
    }
}

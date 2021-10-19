<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post 3',
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta dolorum exercitationem nulla itaque quis? Provident illo nisi consequatur alias laboriosam aut earum minus. Ipsum, quisquam non quos consequuntur cum dolorem voluptatibus architecto? Illum sint totam temporibus officiis rem voluptate vitae aspernatur vel veniam debitis fuga minima pariatur ab quo voluptatum facere odit esse, expedita atque repellat iste, itaque inventore officia consequatur. Eveniet sint perferendis ex laborum, quidem tempore. In ex aliquid consectetur explicabo maiores hic amet aut. Dolorum quibusdam consequuntur iste amet voluptates accusamus a quo delectus voluptas ut inventore quae quidem eveniet hic exercitationem perferendis, magni rem. Nobis fugiat cumque commodi ratione unde non nemo libero, eos exercitationem accusantium perferendis sequi voluptatum voluptatem fugit iusto in similique! Molestias, laborum minima! Facilis perspiciatis beatae, asperiores maxime perferendis possimus quasi error unde ratione maiores facere architecto magni aspernatur optio ullam laborum recusandae voluptates illo, dignissimos nisi? Eius dolorem tenetur nostrum asperiores',
            ],
            [
                'title' => 'Post 4',
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta dolorum exercitationem nulla itaque quis? Provident illo nisi consequatur alias laboriosam aut earum minus. Ipsum, quisquam non quos consequuntur cum dolorem voluptatibus architecto? Illum sint totam temporibus officiis rem voluptate vitae aspernatur vel veniam debitis fuga minima pariatur ab quo voluptatum facere odit esse, expedita atque repellat iste, itaque inventore officia consequatur. Eveniet sint perferendis ex laborum, quidem tempore. In ex aliquid consectetur explicabo maiores hic amet aut. Dolorum quibusdam consequuntur iste amet voluptates accusamus a quo delectus voluptas ut inventore quae quidem eveniet hic exercitationem perferendis, magni rem. Nobis fugiat cumque commodi ratione unde non nemo libero, eos exercitationem accusantium perferendis sequi voluptatum voluptatem fugit iusto in similique! Molestias, laborum minima! Facilis perspiciatis beatae, asperiores maxime perferendis possimus quasi error unde ratione maiores facere architecto magni aspernatur optio ullam laborum recusandae voluptates illo, dignissimos nisi? Eius dolorem tenetur nostrum asperiores',
            ],
            [
                'title' => 'Post 5',
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta dolorum exercitationem nulla itaque quis? Provident illo nisi consequatur alias laboriosam aut earum minus. Ipsum, quisquam non quos consequuntur cum dolorem voluptatibus architecto? Illum sint totam temporibus officiis rem voluptate vitae aspernatur vel veniam debitis fuga minima pariatur ab quo voluptatum facere odit esse, expedita atque repellat iste, itaque inventore officia consequatur. Eveniet sint perferendis ex laborum, quidem tempore. In ex aliquid consectetur explicabo maiores hic amet aut. Dolorum quibusdam consequuntur iste amet voluptates accusamus a quo delectus voluptas ut inventore quae quidem eveniet hic exercitationem perferendis, magni rem. Nobis fugiat cumque commodi ratione unde non nemo libero, eos exercitationem accusantium perferendis sequi voluptatum voluptatem fugit iusto in similique! Molestias, laborum minima! Facilis perspiciatis beatae, asperiores maxime perferendis possimus quasi error unde ratione maiores facere architecto magni aspernatur optio ullam laborum recusandae voluptates illo, dignissimos nisi? Eius dolorem tenetur nostrum asperiores',
            ],
        ];

        foreach($posts as $post) {
            $post_aux = new Post();
            $post_aux->fill($post);
            $post_aux->save();
        }
    }
}

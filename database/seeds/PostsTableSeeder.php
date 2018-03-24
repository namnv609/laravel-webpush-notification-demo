<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Post::create([
                "title" => $faker->realText(50),
                "description" => $faker->realText(72),
                "content" => $faker->realText(200),
                "user_id" => 1,
                "category_id" => 1,
            ]);
        }
    }
}

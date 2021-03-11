<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $categories = Category::all();

        foreach($categories as $key => $c) {
            for($i = 1; $i <= 20; $i++) {
                Post::create([
                    'title' => "Post $i-$key",
                    'url_clean' => "post-$i-$key",
                    'content' => 'If you would like to perform a "left join" or "right join" instead of an "inner join", use the leftJoin or rightJoin methods. These methods have the same signature as the join method.',
                    'posted' => 'yes',
                    'category_id' => $c -> id
                ]);
            }
        }
    }
}

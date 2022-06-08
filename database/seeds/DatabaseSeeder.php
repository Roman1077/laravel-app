<?php

use App\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $tags = factory(Tag::class, 10)->create();
        //$tags = Tag::factory(10)->create();
        $articles = factory(\App\Article::class, 20)->create();
        //$articles = \App\Article::factory(20)->create();
        $tags_id = $tags->pluck('id');

        $articles->each(function ($article) use ($tags_id){
            $article->tags()->attach($tags_id->random(3));
            factory(\App\Comment::class, 3)->create([
                'article_id' => $article->id
            ]);
            factory(\App\State::class,1)->create([
                'article_id' => $article->id
            ]);
        });
    }
}

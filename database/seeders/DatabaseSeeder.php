<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Comment;
use App\Models\Blog;
use App\Models\React;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        user::factory()->create([

            'name'=>'psn',
            'email'=>'psn@gmail.com',
            'status'=>'admin',
        ]);
        user::factory()->create([

            'name'=>'sth',
            'email'=>'sth@gmail.com',
            'status'=>'admin',
        ]);
        user::factory()->create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'status'=>'admin',
        ]);
        User::factory(10)->create();

        Blog::factory()->count(10)->create();

        Category::factory()->count(3)->create();

        Project::factory()->create([
            'name' =>'Personal blog',
            'url' => 'http://localhost:8000/',
        ]);

        Project::factory()->create([
            'name' =>'AutoComplete',
            'url' => 'https://pyaesonenyein96.github.io/Auto-CompletebBox/',
        ]);

        Skill::factory()->create([
            'name' => 'HTML',
            'percent'=>'35',
        ]);
        Skill::factory()->create([
            'name' => 'CSS',
            'percent'=>'43',
        ]);
        Skill::factory()->create([
            'name' => 'javaScript',
            'percent'=>'41',
        ]);
        Skill::factory()->create([
            'name' => 'PHP',
            'percent'=>'28',
        ]);
        Skill::factory()->create([
            'name' => 'Laravel-8',
            'percent'=>'54',
        ]);
        Skill::factory()->create([
            'name' => 'MySQL',
            'percent'=>'40',
        ]);

        Comment::factory()->count(30)->create();

        // Blog::factory()->create([
        //     'title' => 'General',
        //     'category_id'=>'1',
        //     'content' =>'paragraph',
        // ]);


        React::factory()->count(70)->create();

    }
}

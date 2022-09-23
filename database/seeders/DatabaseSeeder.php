<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name'=>'renzi febriandika',
            'email'=>'renzi febriandika@mail',
            'password'=>bcrypt('12345')
        ]);

        Category::create([
            'name'=>'web programing',
            'slug'=>'web programing'
        ]);
        Category::create([
            'name'=>'personal',
            'slug'=>'personal'
        ]);
        Category::create([
            'name'=>'web desain',
            'slug'=>'web desain'
        ]);
        Post::create([
            'title'=>'judul-pertama',
            'slug'=>'judul pertama',
            'category_id'=>1,
            'user_id'=>1,
            'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio natus nobis, commodi consectetur suscipit error',
            'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio natus nobis, commodi consectetur suscipit error officiis eaque possimus blanditiis voluptatibus, optio unde fugiat dolor neque tenetur temporibus iusto, perferendis alias quae? Molestias perspiciatis doloremque, corrupti mollitia velit deserunt pariatur error?'
        ]);
        Post::create([
            'title'=>'judul-kedua',
            'slug'=>'judul kedua',
            'category_id'=>2,
            'user_id'=>1,
            'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio natus nobis, commodi consectetur suscipit error',
            'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio natus nobis, commodi consectetur suscipit error officiis eaque possimus blanditiis voluptatibus, optio unde fugiat dolor neque tenetur temporibus iusto, perferendis alias quae? Molestias perspiciatis doloremque, corrupti mollitia velit deserunt pariatur error?'
        ]);
        Post::create([
            'title'=>'judul-ketiga',
            'slug'=>'judul ketiga',
            'category_id'=>3,
            'user_id'=>1,
            'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio natus nobis, commodi consectetur suscipit error',
            'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio natus nobis, commodi consectetur suscipit error officiis eaque possimus blanditiis voluptatibus, optio unde fugiat dolor neque tenetur temporibus iusto, perferendis alias quae? Molestias perspiciatis doloremque, corrupti mollitia velit deserunt pariatur error?'
        ]);
    }

   
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Han Sarwa',
            'username' => 'haruwa_desu',
            'email' => 'hansaruwa24@gmail.com',
            'password' => bcrypt('123456')
        ]); 
        
        User::factory(4)->create();
        
        // User::create([
        //     'name' => 'Haruwa',
        //     'email' => 'haruwa24@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Coffee',
            'slug' => 'coffee'
        ]);

        Post::factory(28)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem 3rd, ipsum dolor sit amet consectetur adipisicing elit. Ad velit asperiores quo blanditiis aliquam! Sed ad labore nemo mollitia esse voluptatum nostrum sunt, veniam fuga?',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad velit asperiores quo blanditiis aliquam! Sed ad labore nemo mollitia esse voluptatum nostrum sunt, veniam fuga? Quae veritatis odio molestias cumque et culpa ratione qui deleniti, optio excepturi mollitia consectetur quasi hic dolor obcaecati temporibus dolores nobis vitae ipsa quod nulla enim repellendus eius magnam? Enim illum facilis sed perferendis vitae et maiores aperiam ipsa, odit, aspernatur quos aliquam atque tempore eligendi recusandae id!</p> <p>Tempora, perferendis repellat asperiores harum provident illum illo quae maxime, aperiam, unde voluptatem ab a voluptates debitis? Dignissimos rerum hic totam consequuntur laudantium pariatur ut at ipsam ab praesentium nobis, facere illum tenetur.</p> <p>Itaque vero recusandae dolor quas vitae veritatis consequatur minima possimus reiciendis qui sequi ex, eius iure deleniti eaque ab sint a autem magni laboriosam. Qui officia aspernatur beatae molestiae aliquid enim doloribus totam laborum soluta accusamus, voluptatem quod inventore dolorem? Iure id dicta temporibus.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem 3rd, ipsum dolor sit amet consectetur adipisicing elit. Ad velit asperiores quo blanditiis aliquam! Sed ad labore nemo mollitia esse voluptatum nostrum sunt, veniam fuga?',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad velit asperiores quo blanditiis aliquam! Sed ad labore nemo mollitia esse voluptatum nostrum sunt, veniam fuga? Quae veritatis odio molestias cumque et culpa ratione qui deleniti, optio excepturi mollitia consectetur quasi hic dolor obcaecati temporibus dolores nobis vitae ipsa quod nulla enim repellendus eius magnam? Enim illum facilis sed perferendis vitae et maiores aperiam ipsa, odit, aspernatur quos aliquam atque tempore eligendi recusandae id!</p> <p>Tempora, perferendis repellat asperiores harum provident illum illo quae maxime, aperiam, unde voluptatem ab a voluptates debitis? Dignissimos rerum hic totam consequuntur laudantium pariatur ut at ipsam ab praesentium nobis, facere illum tenetur.</p> <p>Itaque vero recusandae dolor quas vitae veritatis consequatur minima possimus reiciendis qui sequi ex, eius iure deleniti eaque ab sint a autem magni laboriosam. Qui officia aspernatur beatae molestiae aliquid enim doloribus totam laborum soluta accusamus, voluptatem quod inventore dolorem? Iure id dicta temporibus.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem 3rd, ipsum dolor sit amet consectetur adipisicing elit. Ad velit asperiores quo blanditiis aliquam! Sed ad labore nemo mollitia esse voluptatum nostrum sunt, veniam fuga?',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad velit asperiores quo blanditiis aliquam! Sed ad labore nemo mollitia esse voluptatum nostrum sunt, veniam fuga? Quae veritatis odio molestias cumque et culpa ratione qui deleniti, optio excepturi mollitia consectetur quasi hic dolor obcaecati temporibus dolores nobis vitae ipsa quod nulla enim repellendus eius magnam? Enim illum facilis sed perferendis vitae et maiores aperiam ipsa, odit, aspernatur quos aliquam atque tempore eligendi recusandae id!</p> <p>Tempora, perferendis repellat asperiores harum provident illum illo quae maxime, aperiam, unde voluptatem ab a voluptates debitis? Dignissimos rerum hic totam consequuntur laudantium pariatur ut at ipsam ab praesentium nobis, facere illum tenetur.</p> <p>Itaque vero recusandae dolor quas vitae veritatis consequatur minima possimus reiciendis qui sequi ex, eius iure deleniti eaque ab sint a autem magni laboriosam. Qui officia aspernatur beatae molestiae aliquid enim doloribus totam laborum soluta accusamus, voluptatem quod inventore dolorem? Iure id dicta temporibus.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem 3rd, ipsum dolor sit amet consectetur adipisicing elit. Ad velit asperiores quo blanditiis aliquam! Sed ad labore nemo mollitia esse voluptatum nostrum sunt, veniam fuga?',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad velit asperiores quo blanditiis aliquam! Sed ad labore nemo mollitia esse voluptatum nostrum sunt, veniam fuga? Quae veritatis odio molestias cumque et culpa ratione qui deleniti, optio excepturi mollitia consectetur quasi hic dolor obcaecati temporibus dolores nobis vitae ipsa quod nulla enim repellendus eius magnam? Enim illum facilis sed perferendis vitae et maiores aperiam ipsa, odit, aspernatur quos aliquam atque tempore eligendi recusandae id!</p> <p>Tempora, perferendis repellat asperiores harum provident illum illo quae maxime, aperiam, unde voluptatem ab a voluptates debitis? Dignissimos rerum hic totam consequuntur laudantium pariatur ut at ipsam ab praesentium nobis, facere illum tenetur.</p> <p>Itaque vero recusandae dolor quas vitae veritatis consequatur minima possimus reiciendis qui sequi ex, eius iure deleniti eaque ab sint a autem magni laboriosam. Qui officia aspernatur beatae molestiae aliquid enim doloribus totam laborum soluta accusamus, voluptatem quod inventore dolorem? Iure id dicta temporibus.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

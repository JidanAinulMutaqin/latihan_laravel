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
            'name' => 'Jidan Ainul Mutaqin',
            'username' => 'Jidan',
            'email' => 'zjidan12345@gmail.com',
            'password' => bcrypt('buatsandi')
        ]);

        // User::create([
        //     'name' => 'Ahmad Diogenes',
        //     'email' => 'diodiodio@gmail.com',
        //     'password' => bcrypt('9999999')
        // ]);

        User::factory(4)->create();

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
            'name' => 'Game',
            'slug' => 'game'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quisquam!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque officiis animi aspernatur nemo perspiciatis modi cupiditate ratione delectus repellat quibusdam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam provident rem omnis repellat vero soluta eum neque voluptatibus tempore repellendus eligendi molestias voluptas molestiae, porro minima reiciendis exercitationem tempora inventore doloribus vel, incidunt odit? Reprehenderit rem eum excepturi ut, a ea officia beatae veritatis commodi. Ducimus dolorem totam iste.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quisquam!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque officiis animi aspernatur nemo perspiciatis modi cupiditate ratione delectus repellat quibusdam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam provident rem omnis repellat vero soluta eum neque voluptatibus tempore repellendus eligendi molestias voluptas molestiae, porro minima reiciendis exercitationem tempora inventore doloribus vel, incidunt odit? Reprehenderit rem eum excepturi ut, a ea officia beatae veritatis commodi. Ducimus dolorem totam iste.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quisquam!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque officiis animi aspernatur nemo perspiciatis modi cupiditate ratione delectus repellat quibusdam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam provident rem omnis repellat vero soluta eum neque voluptatibus tempore repellendus eligendi molestias voluptas molestiae, porro minima reiciendis exercitationem tempora inventore doloribus vel, incidunt odit? Reprehenderit rem eum excepturi ut, a ea officia beatae veritatis commodi. Ducimus dolorem totam iste.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quisquam!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque officiis animi aspernatur nemo perspiciatis modi cupiditate ratione delectus repellat quibusdam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ullam provident rem omnis repellat vero soluta eum neque voluptatibus tempore repellendus eligendi molestias voluptas molestiae, porro minima reiciendis exercitationem tempora inventore doloribus vel, incidunt odit? Reprehenderit rem eum excepturi ut, a ea officia beatae veritatis commodi. Ducimus dolorem totam iste.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      

        // Category::create([
        //     'name' => 'Web design',
        //     'slug' => 'web-design',    
        // ]);
        // Post::create([
        //     'title' => 'judul artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Di sebuah desa kecil yang dikelilingi oleh perbukitan hijau dan sungai yang jernih, hiduplah seorang pemuda bernama Arman. Setiap pagi, ia berjalan menyusuri jalan setapak menuju hutan untuk mencari kayu bakar dan buah-buahan liar. Penduduk desa mengenalnya sebagai sosok yang rajin dan penuh semangat. Suatu hari, saat sedang mencari kayu, ia menemukan sebuah kotak tua yang terkubur sebagian di dalam tanah. Dengan hati-hati, ia membuka kotak tersebut dan menemukan sesuatu yang akan mengubah hidupnya selamanya.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();

    }
}

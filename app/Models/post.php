<?php 

namespace App\Models;

class Post 
{
    public static function all()
    {
        return [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Harlan Gilbran',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae ut possimus incidunt itaque porro maiores commodi deserunt sapiente adipisci, nisi dolore molestias facere laudantium ad quos! Deserunt, libero neque? Veritatis!'
        ],
         [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Harlan Gilbran',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste earum ipsam reprehenderit asperiores, a aliquid itaque alias officiis inventore accusamus minus beatae enim molestiae qui odio ullam provident rerum magni.'
        ]
         ];
    }
}
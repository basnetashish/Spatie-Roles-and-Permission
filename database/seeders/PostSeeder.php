<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data =[
            [
                'title' => 'Laravel',
                'body'=> 'Spatie roles and permission',
            ],
            [
                'title'=> 'Authentication',
                'body'=> ' using roles  to the users'
            ],
            [
                'title'=> 'users posts',
                'body'=>' User post body and description',
            ]
        

         ];
         Post::insert($data);
    }
}

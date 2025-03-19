<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = new Post();
        $categories->title = "Post a traves de seeder";
        $categories->content = "Este post fue añadido a traves del seeder";
        $categories->account_id = 1;
        $categories->save();
    }
}

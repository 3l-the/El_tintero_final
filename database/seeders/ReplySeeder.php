<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reply;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = new Reply();
        $categories->content = "Respuesta a traves de seeder";
        $categories->account_id = 1;
        $categories->post_id = 1;
        $categories->save();
    }
}

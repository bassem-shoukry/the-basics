<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'content' => Str::random(50),
        ]);
    }
}

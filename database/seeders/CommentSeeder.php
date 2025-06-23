<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var User */
        $user = User::find(5);
        $user->comments()->createMany([
            ['content' => 'Coment 1'],
            ['content' => 'Coment 2'],
            ['content' => 'Coment 3'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Database\Factories\AuthorAwardFactory;
use Database\Factories\AuthorFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = AuthorFactory::new()
            ->count(10)
            ->create();

        foreach ($authors as $author)
        {
            AuthorAwardFactory::new()
                ->setAuthor($author)
                ->count(2)
                ->create();
        }
    }
}

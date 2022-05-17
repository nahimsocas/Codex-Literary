<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LanguageSeeder::class,
            CountrySeeder::class,
            GenreSeeder::class,
            AuthorSeeder::class,
            CodexSeeder::class,
            CodexAuthorSeeder::class,
            CodexGenreSeeder::class,
            LibrarySeeder::class,
            UserSeeder::class,
            ChapterSeeder::class
        ]);
    }
}

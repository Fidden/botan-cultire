<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\BookScreenshot;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::factory(10)
            ->create()
            ->each(
                fn(Book $book) => BookScreenshot::factory(5)->create(['book_id' => $book->id])
            );
    }
}

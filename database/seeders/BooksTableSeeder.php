<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; // Import model Book

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create(['title' => 'Laravel Basics', 'author' => 'John Doe', 'stock' => '10',]);
        Book::create(['title' => 'Advanced Laravel', 'author' => 'Jane Doe', 'stock' => '5',]);
        Book::create(['title' => 'Web Development', 'author' => 'Alice', 'stock' => '15',]);
    }
}

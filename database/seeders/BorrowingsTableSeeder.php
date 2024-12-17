<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Borrowing; // Import model Book

class BorrowingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Borrowing::create(['book_id' => 1, 'student_id' => 1, 'borrowed_at' => now(), 'due_date' => now()->addDays(7)]);
        Borrowing::create(['book_id' => 2, 'student_id' => 2, 'borrowed_at' => now(), 'due_date' => now()->addDays(10)]);
    }
}

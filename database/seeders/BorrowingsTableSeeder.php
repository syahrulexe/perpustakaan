<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BorrowingsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('borrowings')->insert([
            ['book_id' => 1, 'student_id' => 1, 'borrowed_at' => '2024-12-01', 'due_date' => '2024-12-10'],
            ['book_id' => 2, 'student_id' => 2, 'borrowed_at' => '2024-12-05', 'due_date' => '2024-12-15'],
        ]);
    }
}

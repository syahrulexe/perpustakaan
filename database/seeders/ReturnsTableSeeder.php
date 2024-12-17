<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Returning;

class ReturnsTableSeeder extends Seeder
{
    public function run()
    {
        Returning::create(['borrowing_id' => 1, 'returned_at' => now()]);
        Returning::create(['borrowing_id' => 2, 'returned_at' => now()]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReturningsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('returnings')->insert([
            ['borrowing_id' => 1, 'returned_at' => '2024-12-08'],
            ['borrowing_id' => 2, 'returned_at' => '2024-12-14'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            ['name' => 'John Doe', 'nis' => '123456'],
            ['name' => 'Jane Smith', 'nis' => '654321'],
            ['name' => 'Alice Johnson', 'nis' => '789101'],
        ]);
    }
}

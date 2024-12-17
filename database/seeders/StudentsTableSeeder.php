<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        Student::create(['name' => 'Budi Santoso', 'nis' => '3454353543']);
        Student::create(['name' => 'Siti Aminah', 'nis' => '3454353543']);
        Student::create(['name' => 'Andi Rahmat', 'nis' => '3454353543']);
    }
}

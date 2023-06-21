<?php

namespace Database\Seeders;

use App\Models\students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    public function run(): void
    {
        students::factory()->count(100)->create();
    }
}

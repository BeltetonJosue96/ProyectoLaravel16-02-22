<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory(1000)->create();
    }
}

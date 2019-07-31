<?php

use Illuminate\Database\Seeder;
use App\Professor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ProfessorTableSeeder::class);
        $this->call(GradebookTableSeeder::class);
        $this->call(StudentTableSeeder::class);
    }
}

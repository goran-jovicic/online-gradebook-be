<?php

use Illuminate\Database\Seeder;
use App\Gradebook;

class GradebookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Gradebook::class, 20)->create();
    }
}

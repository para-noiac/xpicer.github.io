<?php

use Illuminate\Database\Seeder;

class Lesson14TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Lesson14::class, 10)->create();
    }
}

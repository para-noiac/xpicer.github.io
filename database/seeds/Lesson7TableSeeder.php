<?php

use Illuminate\Database\Seeder;

class Lesson7TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Lesson7::class, 50)->create();
    }
}

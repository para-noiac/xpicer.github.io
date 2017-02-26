<?php

use Illuminate\Database\Seeder;

class Lesson15TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Lesson15::class, 20)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class Lesson1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Lesson1::class, 50)->create();
    }
}

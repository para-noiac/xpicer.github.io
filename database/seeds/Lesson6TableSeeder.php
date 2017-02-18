<?php

use Illuminate\Database\Seeder;

class Lesson6TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Lesson6::class, 50)->create();
    }
}

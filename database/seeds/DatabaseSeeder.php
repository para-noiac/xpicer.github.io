<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(Lesson1TableSeeder::class);
        $this->call(Lesson6TableSeeder::class);
        $this->call(Lesson7TableSeeder::class);
        $this->call(Lesson15TableSeeder::class);

        Model::reguard();
    }
}

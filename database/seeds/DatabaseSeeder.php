<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdministratorsTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(MovieGenderTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        $this->call(MovieActorTableSeeder::class);
    }
}

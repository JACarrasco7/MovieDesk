<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            $movies = Movie::find($i);
            for ($x = 1; $x <= 3; $x++) {
                $movies->actors()->attach(rand(1, 250));
            }
        }
    }
}

<?php

use App\Administrator;
use Illuminate\Database\Seeder;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrator::create([
            'name' => 'Jose Antonio Carrasco Gonzalez',
            'email' => 'jacarrasco@moviedesk.es',
            'password' => bcrypt('123'),
            'phone' => '675-70-14-39',
        ]);

        Administrator::create([
            'name' => 'Juan Jose Lopez Rodriguez',
            'email' => 'Juanjo@moviedesk.es',
            'password' => bcrypt('123'),
            'phone' => '666-66-66-66'
        ]);
    }
}

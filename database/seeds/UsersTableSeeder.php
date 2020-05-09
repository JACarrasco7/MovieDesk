<?php

use App\Client;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create()->each(function ($user) {
            $clients = factory(App\Client::class)->make();
            $user->client()->save($clients);
        });

    }
}

<?php

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
        factory(\CodeDelivery\Models\User::class, 10)->create()->each(function($u){
        	$u->client()->save(factory(\CodeDelivery\Models\Client::class)->make());
        });
    }
}

<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\fluxoFin\User::class,1)->states('admin')->create([
                'name' => 'eu mesmo',
                'email' => 'admin@user.com'
            ]);

            factory(\fluxoFin\User::class,1)->create([
                    'name' => 'Client da Silva',
                    'email' => 'client@user.com'
                ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            1 => ['name' => 'Cristiano Ronaldo','email'=>'c.ronaldo@gmail.com','cpf' => '12841872416', 'phone'=> '82988291668', 'password' => bcrypt(123456)],
            2 => ['name' => 'Ronaldinho gaucho','email'=>'r.gaucho@gmail.com', 'cpf' => '03830091460', 'phone'=> '82988512800', 'password' => bcrypt(123456)],
        ]);
    }
}

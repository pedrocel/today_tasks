<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_task')->insert([
            1 => ['name' => 'Aberta', 'created_by'=> 1],
            2 => ['name' => 'Em Desenvolvimento', 'created_by'=>1],
            3 => ['name' => 'Concluída', 'created_by'=>1],
            4 => ['name' => 'Em atraso', 'created_by'=>1]
        ]);
    }
}

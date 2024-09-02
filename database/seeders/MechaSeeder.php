<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MechaSeeder extends Seeder
{
    public function run()
    {
        DB::table('mechas')->insert([
            ['name' => 'Mecha Alpha', 'description' => 'Um mecha de combate pesado.', 'price' => 50000],
            ['name' => 'Mecha Beta', 'description' => 'Mecha de suporte técnico.', 'price' => 30000],
        ]);
    }
}

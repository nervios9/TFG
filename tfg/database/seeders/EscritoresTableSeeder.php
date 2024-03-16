<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EscritoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('escritores')->insert([
            'nombre' => 'Brandon',
            'apellidos' => 'Sanderson',
        ]);
        DB::table('escritores')->insert([
            'nombre' => 'J.R.R',
            'apellidos' => 'Tolkien',
        ]);
        DB::table('escritores')->insert([
            'nombre' => 'George',
            'apellidos' => 'R.R Martin',
        ]);
        DB::table('escritores')->insert([
            'nombre' => 'Noelle',
            'apellidos' => 'Stevenson',
        ]);
        DB::table('escritores')->insert([
            'nombre' => 'SARAH',
            'apellidos' => 'J.MAAS',
        ]);
        DB::table('escritores')->insert([
            'nombre' => 'Jay',
            'apellidos' => 'Kristoff',
        ]);
        DB::table('escritores')->insert([
            'nombre' => 'Tracy',
            'apellidos' => 'Wolff',
        ]);
        DB::table('escritores')->insert([
            'nombre' => 'Joel ',
            'apellidos' => 'Dicker',
        ]);
        DB::table('escritores')->insert([
            'nombre' => 'Laurie',
            'apellidos' => 'Forest',
        ]);
        DB::table('escritores')->insert([
            'nombre' => '',
            'apellidos' => '',
        ]);
        DB::table('escritores')->insert([
            'nombre' => '',
            'apellidos' => '',
        ]);
    }
}

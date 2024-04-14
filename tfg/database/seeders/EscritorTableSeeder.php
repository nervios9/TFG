<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EscritorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
    {
        DB::table('escritor')->insert([
            'nombre' => 'Brandon',
            'apellidos' => 'Sanderson',
        ]);
        DB::table('escritor')->insert([
            'nombre' => 'J.R.R',
            'apellidos' => 'Tolkien',
        ]);
        DB::table('escritor')->insert([
            'nombre' => 'George',
            'apellidos' => 'R.R Martin',
        ]);
        DB::table('escritor')->insert([
            'nombre' => 'Noelle',
            'apellidos' => 'Stevenson',
        ]);
        DB::table('escritor')->insert([
            'nombre' => 'SARAH',
            'apellidos' => 'J.MAAS',
        ]);
        DB::table('escritor')->insert([
            'nombre' => 'Jay',
            'apellidos' => 'Kristoff',
        ]);
        DB::table('escritor')->insert([
            'nombre' => 'Tracy',
            'apellidos' => 'Wolff',
        ]);
        DB::table('escritor')->insert([
            'nombre' => 'Joel ',
            'apellidos' => 'Dicker',
        ]);
        DB::table('escritor')->insert([
            'nombre' => 'Laurie',
            'apellidos' => 'Forest',
        ]);
        DB::table('escritor')->insert([
            'nombre' => '',
            'apellidos' => '',
        ]);
        DB::table('escritor')->insert([
            'nombre' => '',
            'apellidos' => '',
        ]);
    }
    }


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
        DB::table('escritors')->insert([
            'nombre' => 'Brandon',
            'apellidos' => 'Sanderson',
        ]);
        DB::table('escritors')->insert([
            'nombre' => 'J.R.R',
            'apellidos' => 'Tolkien',
        ]);
        DB::table('escritors')->insert([
            'nombre' => 'George',
            'apellidos' => 'R.R Martin',
        ]);
        DB::table('escritors')->insert([
            'nombre' => 'Noelle',
            'apellidos' => 'Stevenson',
        ]);
        DB::table('escritors')->insert([
            'nombre' => 'SARAH',
            'apellidos' => 'J.MAAS',
        ]);
        DB::table('escritors')->insert([
            'nombre' => 'Jay',
            'apellidos' => 'Kristoff',
        ]);
        DB::table('escritors')->insert([
            'nombre' => 'Tracy',
            'apellidos' => 'Wolff',
        ]);
        DB::table('escritors')->insert([
            'nombre' => 'Joel ',
            'apellidos' => 'Dicker',
        ]);
        DB::table('escritors')->insert([
            'nombre' => 'Laurie',
            'apellidos' => 'Forest',
        ]);
        DB::table('escritors')->insert([
            'nombre' => '',
            'apellidos' => '',
        ]);
        DB::table('escritors')->insert([
            'nombre' => '',
            'apellidos' => '',
        ]);
    }
    }


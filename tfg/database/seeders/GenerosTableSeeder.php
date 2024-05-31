<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generos')->insert([
            'genero' => 'Fantasia',
        ]);
        DB::table('generos')->insert([
            'genero' => 'Romance',
        ]);
        DB::table('generos')->insert([
            'genero' => 'Terror',
        ]);
        DB::table('generos')->insert([
            'genero' => 'Historicos',
        ]);
        DB::table('generos')->insert([
            'genero' => 'Ciencia ficcion',
        ]);
        DB::table('generos')->insert([
            'genero' => 'Novela negra',
     
        ]);DB::table('generos')->insert([
            'genero' => 'Novela',
        ]);
 DB::table('generos')->insert([
            'genero' => 'Misterio',
        ]);
DB::table('generos')->insert([
            'genero' => 'Juvenil',
        ]);
DB::table('generos')->insert([
            'genero' => 'Comedia',
        ]);
DB::table('generos')->insert([
            'genero' => 'Comic',
        ]);
DB::table('generos')->insert([
            'genero' => 'Policiaca',
        ]);

DB::table('generos')->insert([
            'genero' => 'Ficcion',
        ]);
    }
}

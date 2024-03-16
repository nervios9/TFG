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
            'genero' => 'fantasia',
        ]);
        DB::table('generos')->insert([
            'genero' => 'romance',
        ]);
        DB::table('generos')->insert([
            'genero' => 'terror',
        ]);
        DB::table('generos')->insert([
            'genero' => 'historicos',
        ]);
        DB::table('generos')->insert([
            'genero' => 'ciencia ficcion',
        ]);
        DB::table('generos')->insert([
            'genero' => 'novela negra',
        ]);DB::table('generos')->insert([
            'genero' => '',
        ]);
        
    }
}

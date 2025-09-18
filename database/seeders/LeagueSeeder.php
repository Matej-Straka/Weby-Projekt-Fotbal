<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the league table with initial data.
     */
    public function run()
    {
        DB::table('league')->insert([
            [
                'id' => 1,
                'name' => 'Premier League',
                'logo' => 'league-1.png',
                'level' => 1,
                'created_at' => 1750633029,
                'updated_at' => 1750633029,
                'deleted_at' => null
            ],
            [
                'id' => 2,
                'name' => 'Championship',
                'logo' => 'league-2.png',
                'level' => 2,
                'created_at' => 1750633029,
                'updated_at' => 1750633029,
                'deleted_at' => null
            ],
            [
                'id' => 3,
                'name' => 'League One',
                'logo' => 'league-3.png',
                'level' => 3,
                'created_at' => 1750633029,
                'updated_at' => 1750633029,
                'deleted_at' => null
            ],
            [
                'id' => 4,
                'name' => 'League Two',
                'logo' => 'league-4.png',
                'level' => 4,
                'created_at' => 1750633029,
                'updated_at' => 1750633029,
                'deleted_at' => null
            ],
            [
                'id' => 24,
                'name' => 'First Division (- 91/92)',
                'logo' => 'league-1.png',
                'level' => 1,
                'created_at' => 1750633143,
                'updated_at' => 1750633143,
                'deleted_at' => null
            ],
            [
                'id' => 25,
                'name' => 'First Division (- 03/04)',
                'logo' => 'league-25.png',
                'level' => 2,
                'created_at' => 1750633143,
                'updated_at' => 1750633143,
                'deleted_at' => null
            ],
            [
                'id' => 26,
                'name' => 'Second Division (- 03/04)',
                'logo' => 'league-26.png',
                'level' => 3,
                'created_at' => 1750633144,
                'updated_at' => 1750633144,
                'deleted_at' => null
            ]
        ]);
    }
}
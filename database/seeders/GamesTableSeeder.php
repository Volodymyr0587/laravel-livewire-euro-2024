<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'team1_name' => 'Germany',
                'team1_flag' => 'de',
                'team2_name' => 'Scotland',
                'team2_flag' => 'gb-sct',
                'date' => '2024-06-14',
                'time' => '22:00:00',
                'score1' => 5,
                'score2' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Hungary',
                'team1_flag' => 'hu',
                'team2_name' => 'Switzerland',
                'team2_flag' => 'ch',
                'date' => '2024-06-15',
                'time' => '16:00:00',
                'score1' => 1,
                'score2' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Spain',
                'team1_flag' => 'es',
                'team2_name' => 'Croatia',
                'team2_flag' => 'hr',
                'date' => '2024-06-15',
                'time' => '19:00:00',
                'score1' => 3,
                'score2' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Italy',
                'team1_flag' => 'it',
                'team2_name' => 'Albania',
                'team2_flag' => 'al',
                'date' => '2024-06-15',
                'time' => '22:00:00',
                'score1' => 2,
                'score2' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Poland',
                'team1_flag' => 'pl',
                'team2_name' => 'Netherlands',
                'team2_flag' => 'nl',
                'date' => '2024-06-16',
                'time' => '16:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Slovenia',
                'team1_flag' => 'si',
                'team2_name' => 'Denmark',
                'team2_flag' => 'dk',
                'date' => '2024-06-16',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Serbia',
                'team1_flag' => 'rs',
                'team2_name' => 'England',
                'team2_flag' => 'gb-eng',
                'date' => '2024-06-16',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Romania',
                'team1_flag' => 'ro',
                'team2_name' => 'Ukraine',
                'team2_flag' => 'ua',
                'date' => '2024-06-17',
                'time' => '16:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Belgium',
                'team1_flag' => 'be',
                'team2_name' => 'Slovakia',
                'team2_flag' => 'sk',
                'date' => '2024-06-17',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Austria',
                'team1_flag' => 'at',
                'team2_name' => 'France',
                'team2_flag' => 'fr',
                'date' => '2024-06-17',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Turkey',
                'team1_flag' => 'tr',
                'team2_name' => 'Georgia',
                'team2_flag' => 'ge',
                'date' => '2024-06-18',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Portugal',
                'team1_flag' => 'pt',
                'team2_name' => 'Czechia',
                'team2_flag' => 'cz',
                'date' => '2024-06-18',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Croatia',
                'team1_flag' => 'hr',
                'team2_name' => 'Albania',
                'team2_flag' => 'al',
                'date' => '2024-06-19',
                'time' => '16:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Germany',
                'team1_flag' => 'de',
                'team2_name' => 'Hungary',
                'team2_flag' => 'hu',
                'date' => '2024-06-19',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Scotland',
                'team1_flag' => 'gb-sct',
                'team2_name' => 'Switzerland',
                'team2_flag' => 'ch',
                'date' => '2024-06-19',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Slovenia',
                'team1_flag' => 'si',
                'team2_name' => 'Serbia',
                'team2_flag' => 'rs',
                'date' => '2024-06-20',
                'time' => '16:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Denmark',
                'team1_flag' => 'dk',
                'team2_name' => 'England',
                'team2_flag' => 'gb-eng',
                'date' => '2024-06-20',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Spain',
                'team1_flag' => 'es',
                'team2_name' => 'Italy',
                'team2_flag' => 'it',
                'date' => '2024-06-20',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Slovakia',
                'team1_flag' => 'sk',
                'team2_name' => 'Ukraine',
                'team2_flag' => 'ua',
                'date' => '2024-06-21',
                'time' => '16:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Poland',
                'team1_flag' => 'pl',
                'team2_name' => 'Austria',
                'team2_flag' => 'at',
                'date' => '2024-06-21',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Netherlands',
                'team1_flag' => 'nl',
                'team2_name' => 'France',
                'team2_flag' => 'fr',
                'date' => '2024-06-21',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Georgia',
                'team1_flag' => 'ge',
                'team2_name' => 'Czechia',
                'team2_flag' => 'cz',
                'date' => '2024-06-22',
                'time' => '16:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Turkey',
                'team1_flag' => 'tr',
                'team2_name' => 'Portugal',
                'team2_flag' => 'pt',
                'date' => '2024-06-22',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Belgium',
                'team1_flag' => 'be',
                'team2_name' => 'Romania',
                'team2_flag' => 'ro',
                'date' => '2024-06-22',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Switzerland',
                'team1_flag' => 'ch',
                'team2_name' => 'Germany',
                'team2_flag' => 'de',
                'date' => '2024-06-23',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Scotland',
                'team1_flag' => 'gb-sct',
                'team2_name' => 'Hungary',
                'team2_flag' => 'hu',
                'date' => '2024-06-23',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Albania',
                'team1_flag' => 'al',
                'team2_name' => 'Spain',
                'team2_flag' => 'es',
                'date' => '2024-06-24',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Croatia',
                'team1_flag' => 'hr',
                'team2_name' => 'Italy',
                'team2_flag' => 'it',
                'date' => '2024-06-24',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'France',
                'team1_flag' => 'fr',
                'team2_name' => 'Poland',
                'team2_flag' => 'pl',
                'date' => '2024-06-25',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Netherlands',
                'team1_flag' => 'nl',
                'team2_name' => 'Austria',
                'team2_flag' => 'at',
                'date' => '2024-06-25',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Denmark',
                'team1_flag' => 'dk',
                'team2_name' => 'Serbia',
                'team2_flag' => 'rs',
                'date' => '2024-06-25',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'England',
                'team1_flag' => 'gb-eng',
                'team2_name' => 'Slovenia',
                'team2_flag' => 'si',
                'date' => '2024-06-25',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Ukraine',
                'team1_flag' => 'ua',
                'team2_name' => 'Belgium',
                'team2_flag' => 'be',
                'date' => '2024-06-26',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Slovakia',
                'team1_flag' => 'sk',
                'team2_name' => 'Romania',
                'team2_flag' => 'ro',
                'date' => '2024-06-26',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Georgia',
                'team1_flag' => 'ge',
                'team2_name' => 'Portugal',
                'team2_flag' => 'pt',
                'date' => '2024-06-26',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],
            [
                'team1_name' => 'Czechia',
                'team1_flag' => 'cz',
                'team2_name' => 'Turkey',
                'team2_flag' => 'tr',
                'date' => '2024-06-26',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'group_stage',
            ],

            //% round_of_16
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-06-29',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'round_of_16',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-06-29',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'round_of_16',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-06-30',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'round_of_16',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-06-30',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'round_of_16',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-01',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'round_of_16',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-01',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'round_of_16',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-02',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'round_of_16',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-02',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'round_of_16',
            ],


            //% quarter_final
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-05',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'quarter_final',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-05',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'quarter_final',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-06',
                'time' => '19:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'quarter_final',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-06',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'quarter_final',
            ],

            //% semi_final
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-09',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'semi_final',
            ],
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-10',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'semi_final',
            ],

            //% final
            [
                'team1_name' => '',
                'team1_flag' => '',
                'team2_name' => '',
                'team2_flag' => '',
                'date' => '2024-07-14',
                'time' => '22:00:00',
                'score1' => null,
                'score2' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'stage' => 'final',
            ],
        ]);
    }
}

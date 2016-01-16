<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = [
            1 => [
                'id' => 1,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            2 => [
                'id' => 2,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            3 => [
                'id' => 3,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
            4 => [
                'id' => 4,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            5 => [
                'id' => 5,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            6 => [
                'id' => 6,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
            7 => [
                'id' => 7,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            8 => [
                'id' => 8,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            9 => [
                'id' => 9,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
            10 => [
                'id' => 10,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            11 => [
                'id' => 11,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            12 => [
                'id' => 12,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            13 => [
                'id' => 13,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
            14 => [
                'id' => 14,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            15 => [
                'id' => 15,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            16 => [
                'id' => 16,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
            17 => [
                'id' => 17,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            18 => [
                'id' => 18,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            19 => [
                'id' => 19,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
            20 => [
                'id' => 20,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            21 => [
                'id' => 21,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            22 => [
                'id' => 22,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            23 => [
                'id' => 23,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
            24 => [
                'id' => 24,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            25 => [
                'id' => 25,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            26 => [
                'id' => 26,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
            27 => [
                'id' => 27,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            28 => [
                'id' => 28,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            29 => [
                'id' => 29,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
            30 => [
                'id' => 30,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            31 => [
                'id' => 31,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            32 => [
                'id' => 32,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            33 => [
                'id' => 33,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
            34 => [
                'id' => 34,
                'date' => \Carbon\Carbon::create(2016,6,10,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,16],
            ],
            35 => [
                'id' => 35,
                'date' => \Carbon\Carbon::create(2016,6,11,15,0,0),
                'stadium' => 'Felix',
                'teams' => [1,20],
            ],
            36 => [
                'id' => 36,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [24,18],
            ],
        ];

        foreach ($matches as $match){
            $m = \App\Match::create([
                'date' => $match['date'],
                'stadium' => $match['stadium'],
            ]);
            $m->teams()->attach($match['teams'][0]);
            $m->teams()->attach($match['teams'][1]);
        }
    }
}

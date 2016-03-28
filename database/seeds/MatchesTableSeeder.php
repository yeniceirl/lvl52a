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
            // Group A
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
                'teams' => [1,21],
            ],
            3 => [
                'id' => 3,
                'date' => \Carbon\Carbon::create(2016,6,15,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [16,21],
            ],
            4 => [
                'id' => 4,
                'date' => \Carbon\Carbon::create(2016,6,15,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [7,1],
            ],
            5 => [
                'id' => 5,
                'date' => \Carbon\Carbon::create(2016,6,19,21,0,0),
                'stadium' => 'Felix',
                'teams' => [16,1],
            ],
            6 => [
                'id' => 6,
                'date' => \Carbon\Carbon::create(2016,6,19,21,0,0),
                'stadium' => 'Matmut',
                'teams' => [21,7],
            ],
            // Group B
            7 => [
                'id' => 7,
                'date' => \Carbon\Carbon::create(2016,6,11,18,0,0),
                'stadium' => 'Stade de France',
                'teams' => [24,18],
            ],
            8 => [
                'id' => 8,
                'date' => \Carbon\Carbon::create(2016,6,11,21,0,0),
                'stadium' => 'Felix',
                'teams' => [6,17],
            ],
            9 => [
                'id' => 9,
                'date' => \Carbon\Carbon::create(2016,6,15,15,0,0),
                'stadium' => 'Matmut',
                'teams' => [17,18],
            ],
            10 => [
                'id' => 10,
                'date' => \Carbon\Carbon::create(2016,6,16,15,0,0),
                'stadium' => 'Stade de France',
                'teams' => [6,24],
            ],
            11 => [
                'id' => 11,
                'date' => \Carbon\Carbon::create(2016,6,20,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [17,24],
            ],
            12 => [
                'id' => 12,
                'date' => \Carbon\Carbon::create(2016,6,20,21,0,0),
                'stadium' => 'Felix',
                'teams' => [18,6],
            ],
            //Group C
            13 => [
                'id' => 13,
                'date' => \Carbon\Carbon::create(2016,6,12,15,0,0),
                'stadium' => 'Matmut',
                'teams' => [23,13],
            ],
            14 => [
                'id' => 14,
                'date' => \Carbon\Carbon::create(2016,6,12,18,0,0),
                'stadium' => 'Stade de France',
                'teams' => [8,14],
            ],
            15 => [
                'id' => 15,
                'date' => \Carbon\Carbon::create(2016,6,16,18,0,0),
                'stadium' => 'Felix',
                'teams' => [14,13],
            ],
            16 => [
                'id' => 16,
                'date' => \Carbon\Carbon::create(2016,6,16,21,0,0),
                'stadium' => 'Matmut',
                'teams' => [8,23],
            ],
            17 => [
                'id' => 17,
                'date' => \Carbon\Carbon::create(2016,6,21,18,0,0),
                'stadium' => 'Stade de France',
                'teams' => [14,23],
            ],
            18 => [
                'id' => 18,
                'date' => \Carbon\Carbon::create(2016,6,21,18,0,0),
                'stadium' => 'Felix',
                'teams' => [13,8],
            ],
            //Group D
            19 => [
                'id' => 19,
                'date' => \Carbon\Carbon::create(2016,6,12,15,0,0),
                'stadium' => 'Matmut',
                'teams' => [22,4],
            ],
            20 => [
                'id' => 20,
                'date' => \Carbon\Carbon::create(2016,6,13,15,0,0),
                'stadium' => 'Stade de France',
                'teams' => [19,5],
            ],
            21 => [
                'id' => 21,
                'date' => \Carbon\Carbon::create(2016,6,17,18,0,0),
                'stadium' => 'Stade de France',
                'teams' => [5,4],
            ],
            22 => [
                'id' => 22,
                'date' => \Carbon\Carbon::create(2016,6,17,21,0,0),
                'stadium' => 'Felix',
                'teams' => [19,22],
            ],
            23 => [
                'id' => 23,
                'date' => \Carbon\Carbon::create(2016,6,21,21,0,0),
                'stadium' => 'Matmut',
                'teams' => [5,22],
            ],
            24 => [
                'id' => 24,
                'date' => \Carbon\Carbon::create(2016,6,21,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [4,19],
            ],
            //Group E
            25 => [
                'id' => 25,
                'date' => \Carbon\Carbon::create(2016,6,13,18,0,0),
                'stadium' => 'Felix',
                'teams' => [11,20],
            ],
            26 => [
                'id' => 26,
                'date' => \Carbon\Carbon::create(2016,6,13,21,0,0),
                'stadium' => 'Matmut',
                'teams' => [3,12],
            ],
            27 => [
                'id' => 27,
                'date' => \Carbon\Carbon::create(2016,6,17,15,0,0),
                'stadium' => 'Stade de France',
                'teams' => [12,20],
            ],
            28 => [
                'id' => 28,
                'date' => \Carbon\Carbon::create(2016,6,18,15,0,0),
                'stadium' => 'Felix',
                'teams' => [3,11],
            ],
            29 => [
                'id' => 29,
                'date' => \Carbon\Carbon::create(2016,6,22,21,0,0),
                'stadium' => 'Matmut',
                'teams' => [12,11],
            ],
            30 => [
                'id' => 30,
                'date' => \Carbon\Carbon::create(2016,6,22,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [20,3],
            ],
            //Group F
            31 => [
                'id' => 31,
                'date' => \Carbon\Carbon::create(2016,6,14,18,0,0),
                'stadium' => 'Stade de France',
                'teams' => [2,9],
            ],
            32 => [
                'id' => 32,
                'date' => \Carbon\Carbon::create(2016,6,14,21,0,0),
                'stadium' => 'Felix',
                'teams' => [15,10],
            ],
            33 => [
                'id' => 33,
                'date' => \Carbon\Carbon::create(2016,6,18,18,0,0),
                'stadium' => 'Matmut',
                'teams' => [10,9],
            ],
            34 => [
                'id' => 34,
                'date' => \Carbon\Carbon::create(2016,6,18,21,0,0),
                'stadium' => 'Stade de France',
                'teams' => [15,2],
            ],
            35 => [
                'id' => 35,
                'date' => \Carbon\Carbon::create(2016,6,22,21,0,0),
                'stadium' => 'Felix',
                'teams' => [10,2],
            ],
            36 => [
                'id' => 36,
                'date' => \Carbon\Carbon::create(2016,6,22,21,0,0),
                'stadium' => 'Matmut',
                'teams' => [9,15],
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

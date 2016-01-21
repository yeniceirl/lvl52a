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

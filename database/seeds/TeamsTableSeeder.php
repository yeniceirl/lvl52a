<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            ['name' => 'Albania', 'flag' => 'Albania.png', 'group' => 'A'],
            ['name' => 'Austria', 'flag' => 'Austria.png', 'group' => 'F'],
            ['name' => 'Belgium', 'flag' => 'Belgium.png', 'group' => 'E'],
            ['name' => 'Croatia', 'flag' => 'Croatia.png', 'group' => 'D'],
            ['name' => 'Czech-Republic', 'flag' => 'Czech-Republic.png', 'group' => 'D'],
            ['name' => 'England', 'flag' => 'England.png', 'group' => 'B'],
            ['name' => 'France', 'flag' => 'France.png', 'group' => 'A'],
            ['name' => 'Germany', 'flag' => 'Germany.png', 'group' => 'C'],
            ['name' => 'Hungary', 'flag' => 'Hungary.png', 'group' => 'F'],
            ['name' => 'Iceland', 'flag' => 'Iceland.png', 'group' => 'F'],
            ['name' => 'Ireland', 'flag' => 'Ireland.png', 'group' => 'E'],
            ['name' => 'Italy', 'flag' => 'Italy.png', 'group' => 'E'],
            ['name' => 'Northern-Ireland', 'flag' => 'Cuba.png', 'group' => 'C'],
            ['name' => 'Poland', 'flag' => 'Poland.png', 'group' => 'C'],
            ['name' => 'Portugal', 'flag' => 'Portugal.png', 'group' => 'F'],
            ['name' => 'Romania', 'flag' => 'Romania.png', 'group' => 'A'],
            ['name' => 'Russia', 'flag' => 'Russia.png', 'group' => 'B'],
            ['name' => 'Slovakia', 'flag' => 'Slovakia.png', 'group' => 'B'],
            ['name' => 'Spain', 'flag' => 'Spain.png', 'group' => 'D'],
            ['name' => 'Sweden', 'flag' => 'Sweden.png', 'group' => 'E'],
            ['name' => 'Switzerland', 'flag' => 'Switzerland.png', 'group' => 'A'],
            ['name' => 'Turkey', 'flag' => 'Turkey.png', 'group' => 'D'],
            ['name' => 'Ukraine', 'flag' => 'Ukraine.png', 'group' => 'C'],
            ['name' => 'Wales', 'flag' => 'Wales.png', 'group' => 'B'],
        ];

        DB::table('teams')->insert($teams);

    }
}

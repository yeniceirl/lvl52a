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
            ['name' => 'Albania', 'flag' => 'Albania.png', 'group' => 'A'], //1
            ['name' => 'Austria', 'flag' => 'Austria.png', 'group' => 'F'], //2
            ['name' => 'Belgium', 'flag' => 'Belgium.png', 'group' => 'E'], //3
            ['name' => 'Croatia', 'flag' => 'Croatia.png', 'group' => 'D'], //4
            ['name' => 'Czech-Republic', 'flag' => 'Czech-Republic.png', 'group' => 'D'],   //5
            ['name' => 'England', 'flag' => 'England.png', 'group' => 'B'], //6
            ['name' => 'France', 'flag' => 'France.png', 'group' => 'A'],   //7
            ['name' => 'Germany', 'flag' => 'Germany.png', 'group' => 'C'], //8
            ['name' => 'Hungary', 'flag' => 'Hungary.png', 'group' => 'F'], //9
            ['name' => 'Iceland', 'flag' => 'Iceland.png', 'group' => 'F'], //10
            ['name' => 'Ireland', 'flag' => 'Ireland.png', 'group' => 'E'], //11
            ['name' => 'Italy', 'flag' => 'Italy.png', 'group' => 'E'],     //12
            ['name' => 'Northern-Ireland', 'flag' => 'Cuba.png', 'group' => 'C'],   //13
            ['name' => 'Poland', 'flag' => 'Poland.png', 'group' => 'C'],   //14
            ['name' => 'Portugal', 'flag' => 'Portugal.png', 'group' => 'F'],   //15
            ['name' => 'Romania', 'flag' => 'Romania.png', 'group' => 'A'], //16
            ['name' => 'Russia', 'flag' => 'Russia.png', 'group' => 'B'],   //17
            ['name' => 'Slovakia', 'flag' => 'Slovakia.png', 'group' => 'B'],   //18
            ['name' => 'Spain', 'flag' => 'Spain.png', 'group' => 'D'], //19
            ['name' => 'Sweden', 'flag' => 'Sweden.png', 'group' => 'E'],   //20
            ['name' => 'Switzerland', 'flag' => 'Switzerland.png', 'group' => 'A'], //21
            ['name' => 'Turkey', 'flag' => 'Turkey.png', 'group' => 'D'],   //22
            ['name' => 'Ukraine', 'flag' => 'Ukraine.png', 'group' => 'C'], //23
            ['name' => 'Wales', 'flag' => 'Wales.png', 'group' => 'B'], //24
        ];

        DB::table('teams')->insert($teams);

    }
}

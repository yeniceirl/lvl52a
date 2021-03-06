<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = \App\Team::all();

        foreach ($teams as $team) {
            factory(App\Player::class, 5)->create([
                'team_id' => $team->id,
            ]);
        }
    }
}

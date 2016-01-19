<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yeni6',
            'email' => 'yeniceirl@gmail.com',
            'password' => bcrypt('123'),
            'level' => 'admin'
        ]);
        App\User::create([
            'name' => 'yy',
            'email' => 'yy@yy.yy',
            'password' => bcrypt('yy'),
            'level' => 'admin'
        ]);

        factory(App\User::class, 10)->create();
    }
}

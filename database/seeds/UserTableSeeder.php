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
        DB::table('user')->insert([
            'user' => 'admin',
            'password' => Hash::make('secret'),
            'character_id' => '1',
        ]);
    }
}

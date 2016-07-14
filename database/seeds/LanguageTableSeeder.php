<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'EN'
            ],
            [
                'name' => '繁體中文'
            ],
        ];
        DB::table('language')->insert($data);
    }
}

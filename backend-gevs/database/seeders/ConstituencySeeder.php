<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConstituencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $constituencies = [
            ['title' => 'Shangri-la-Town', 'description' => 'Description for Shangri-la-Town', 'active' => 1],
            ['title' => 'Northern-Kunlun-Mountain', 'description' => 'Description for Northern-Kunlun-Mountain', 'active' => 1],
            ['title' => 'Western-Shangri-la', 'description' => 'Description for Western-Shangri-la', 'active' => 1],
            ['title' => 'Naboo-Vallery', 'description' => 'Description for Naboo-Vallery', 'active' => 1],
            ['title' => 'New-Felucia', 'description' => 'Description for New-Felucia', 'active' => 1],
        ];

        \DB::table('constituencies')->insert($constituencies);
    }
}

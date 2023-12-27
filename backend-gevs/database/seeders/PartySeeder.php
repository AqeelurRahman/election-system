<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parties = [
            ['title' => 'Blue Party', 'description' => 'Description for Blue Party', 'active' => 1],
            ['title' => 'Red Party', 'description' => 'Description for Red Party', 'active' => 1],
            ['title' => 'Yellow Party', 'description' => 'Description for Yellow Party', 'active' => 1],
            ['title' => 'Independent', 'description' => 'Description for Independent', 'active' => 1],
        ];

        \DB::table('parties')->insert($parties);
    }
}

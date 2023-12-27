<?php

namespace Database\Seeders;

use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'activity_log',
            'failed_jobs',
        ]);

        $this->call(PartySeeder::class);
        $this->call(ConstituencySeeder::class);
        $this->call(AuthSeeder::class);
        $this->call(AnnouncementSeeder::class);
        $this->call(UVCSeeder::class);

        Model::reguard();
    }
}

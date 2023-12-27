<?php

namespace Database\Seeders\Auth;

use App\Domains\Auth\Models\User;
use App\Models\Constituency;
use App\Models\Party;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserTableSeeder.
 */
class UserSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, user id of 1
        User::create([
            'type' => User::TYPE_ADMIN,
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => 'secret',
            'email_verified_at' => now(),
            'active' => true,
        ]);
        User::create([
            'type' => User::TYPE_ADMIN,
            'name' => 'Election Commission Officer',
            'email' => 'election@shangrilla.gov.sr',
            'password' => 'shangrila2024$',
            'email_verified_at' => now(),
            'active' => true,
        ]);

        if (app()->environment(['local', 'testing'])) {
            User::create([
                'type' => User::TYPE_USER,
                'name' => 'Test User',
                'email' => 'user@user.com',
                'password' => 'secret',
                'email_verified_at' => now(),
                'active' => true,
            ]);
            User::create([
                'type' => User::TYPE_USER,
                'name' => 'John Doe',
                'email' => 'candidate@shangrilla.com',
                'password' => 'secret',
                'email_verified_at' => now(),
                'active' => true,
            ]);
            User::create([
                'type' => User::TYPE_USER,
                'name' => 'Jane Smith',
                'email' => 'candidate@naboo-valley.com',
                'password' => 'secret',
                'email_verified_at' => now(),
                'active' => true,
            ]);
        }
        // Get all parties and constituencies
        $parties = Party::all();
        $constituencies = Constituency::all();

        // Create candidates for each party and constituency combination
            foreach ($constituencies as $constituency) {
                foreach ($parties as $party) {
                $user = User::create([
                    'type' => User::TYPE_USER,
                    'name' => 'Candidate ' . $party->title . ' (' . $constituency->title . ')',
                    'email' => strtolower($party->title) . '@' . strtolower($constituency->title) . '.com',
                    'password' => Hash::make('password'),
                    'email_verified_at' => now(),
                    'active' => true,
                ]);

                // Now, create a candidate record
                \DB::table('candidates')->insert([
                    'user_id' => $user->id,
                    'party_id' => $party->id,
                    'constituency_id' => $constituency->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $this->enableForeignKeys();
    }
}

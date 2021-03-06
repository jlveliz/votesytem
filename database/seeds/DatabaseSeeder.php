<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(VoterTableSeeder::class);
        $this->call(DignityTableSeeder::class);
        $this->call(ListVoteTableSeeder::class);
        $this->call(CandidateListVoteTableSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Lead;
use App\Models\ClientProgram;
use App\Models\Voucher;
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
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        Client::factory(50)->create();
        Lead::factory(100)->create();
        ClientProgram::factory(100)->create();
        Voucher::factory(10)->create();

        

    }
}

<?php

namespace Database\Seeders;

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
        $this->call(AdminTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
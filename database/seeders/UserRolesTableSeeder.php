<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use OTIFSolutions\ACLMenu\Models\UserRole;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::updateOrCreate(['id' => 1],['name' => 'ADMIN', 'team_id' => 1]);
        UserRole::updateOrCreate(['id' => 2],['name' => 'USER', 'team_id' => 2]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 1],['name' => 'ADMIN','email' => 'admin@gmail.com','password' => bcrypt(('admin123')), 'team_id' => 1]);
    }
}

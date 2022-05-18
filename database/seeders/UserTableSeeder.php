<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 2],['name' => 'User','email' => 'abc@gmail.com','password' => bcrypt(('abc123')), 'team_id' => 2]);
}
}

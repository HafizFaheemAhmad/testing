<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use OTIFSolutions\ACLMenu\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuItem::updateOrCreate(['id'=>28],['parent_id' => 0,'icon'
        => 'feather icon-power','name'
        => 'Logout','route'
        => '/logout', 'generate_permission'
        => 'MANAGE_ONLY', 'show_on_sidebar'
        => 0])
        ->user_roles()
        ->syncWithoutDetaching([1,2]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Role::create(['name' => __('Administrator')]);
        Role::create(['name' => __('Student')]);
        Role::create(['name' => __('Teacher')]);
    }
}

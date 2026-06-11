<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Models\User;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $super = Role::create([
            'name' => 'super-user',
        ]);
        
        $admin = Role::create([
            'name' => 'admin',
        ]);

        $customer = Role::create([
            'name' => 'customer',
        ]);
    }
}

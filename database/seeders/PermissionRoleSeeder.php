<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionRoleSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles & permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]
            ->forgetCachedPermissions();

        /*
        |--------------------------------------------------------------------------
        | Define Permissions
        |--------------------------------------------------------------------------
        */
        $permissions = [
            // Machines
            'machine.view',
            'machine.create',
            'machine.edit',
            'machine.delete',

            // Users (future)
            'user.view',
            'user.create',
            'user.edit',
            'user.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        /*
        |--------------------------------------------------------------------------
        | Define Roles
        |--------------------------------------------------------------------------
        */
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $staff = Role::firstOrCreate(['name' => 'staff']);
        $user  = Role::firstOrCreate(['name' => 'user']);

        /*
        |--------------------------------------------------------------------------
        | Attach Permissions to Roles
        |--------------------------------------------------------------------------
        */

        // Admin gets everything
        $admin->syncPermissions($permissions);

        // Staff limited
        $staff->syncPermissions([
            'machine.view',
            'machine.create',
            'machine.edit',
        ]);

        // User only view
        $user->syncPermissions([
            'machine.view',
        ]);
    }
}

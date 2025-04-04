<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use Illuminate\Support\Facades\Hash;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create Permissions
         Permission::create(['name' => 'view_users']);
         Permission::create(['name' => 'create_users']);
         Permission::create(['name' => 'edit_users']);
         Permission::create(['name' => 'delete_users']);
         Permission::create(['name' => 'view_ranks']);
         Permission::create(['name' => 'create_ranks']);
         Permission::create(['name' => 'edit_ranks']);
         Permission::create(['name' => 'delete_ranks']);
         Permission::create(['name' => 'view_locations']);
         Permission::create(['name' => 'create_locations']);
         Permission::create(['name' => 'edit_locations']);
         Permission::create(['name' => 'delete_locations']);
         Permission::create(['name' => 'view_units']);
         Permission::create(['name' => 'create_units']);
         Permission::create(['name' => 'edit_units']);
         Permission::create(['name' => 'delete_units']);
         
         // Create Roles
         $adminRole = Role::create(['name' => 'admin']);
         $officertRole = Role::create(['name' => 'officer']);
         $operatortRole = Role::create(['name' => 'operator']);
         
         
         // Assign Permissions to Admin
         $adminRole->givePermissionTo(Permission::all());
         
         // Assign Permissions to Officer
         $officerRole->givePermissionTo([
            'view_users',
            'create_users',
            'edit_users',
            'view_ranks',
            'create_ranks',
            'edit_ranks',
            'view_locations',
            'create_locations',
            'edit_locations',
            'view_units',
            'create_units',
            'edit_units',

        ]);
// Assign Permissions to Operator
        $operatorRole->givePermissionTo([
            'view_users',
            'view_ranks',
            'view_locations',
            'view_units',
           
        ]);

        $user = User::find(1); // Find user with ID 1
         $user->assignRole('admin'); // Assign 'admin' role


        //  foreach ($permissions as $permission) {
        //     // Check if the permission already exists, if not, create it
        //     Permission::firstOrCreate(
        //         ['name' => $permission, 'guard_name' => 'web']
        //     );
        // }

        
    }
}

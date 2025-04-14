<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $actionsByResource = [
            'audits' => ['viewAny'],
            'companies' => ['viewAny', 'create', 'update', 'delete'],
            'currencies' => ['viewAny', 'create', 'update', 'delete'],
            'privileges' => ['viewAny', 'create', 'update', 'delete'],
            'users' => ['viewAny', 'view', 'create', 'update', 'delete'],
        ];

        foreach ($actionsByResource as $resource => $actions) {
            foreach ($actions as $action) {
                Permission::firstOrCreate(['guard_name' => 'admin', 'name' => "{$resource}.{$action}"]);
            }
        }

        $role = Role::firstOrCreate(['guard_name' => 'admin', 'name' => 'super-user']);
        $role->givePermissionTo(Permission::all());

        $user = Admin::find(1);
        if ($user) {
            $user->assignRole($role);
        }
    }
}

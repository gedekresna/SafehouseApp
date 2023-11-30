<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Throwable;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Log;


class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $default_value = [
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => Hash::make('safehousecafe2023'),
        ];
        DB::beginTransaction();
        try{

            $staff = User::create(array_merge([
                'name' => 'staff',
                'email' => 'staffsafehouse@gmail.com',
            ], $default_value));

            $admin = User::create(array_merge([
                'name' => 'admin',
                'email' => 'adminsafehouse@gmail.com',
            ], $default_value));

            $roleStaff = Role::create(['name' => 'staff']);
            $roleAdmin = Role::create(['name' => 'admin']);

            $permissionReadRole = Permission::create(['name' => 'read role']);
            $permissionCreateRole = Permission::create(['name' => 'create role']);
            $permissionUpdateRole = Permission::create(['name' => 'update role']);
            $permissionDeleteRole = Permission::create(['name' => 'delete role']);

            $roleStaff->syncPermissions([$permissionReadRole->id, $permissionCreateRole->id]);
            $roleAdmin->syncPermissions([$permissionReadRole->id, $permissionCreateRole->id, $permissionUpdateRole->id, $permissionDeleteRole->id]);

            $staff->assignRole($roleStaff);
            $staff->assignRole($roleStaff);

            DB::commit();

        }catch(Throwable $th){
            DB::rollback();
            Log::error('Seeder failed: ' . $th->getMessage());
        }

    }
}

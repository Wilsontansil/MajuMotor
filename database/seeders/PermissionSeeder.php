<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        static::CreatePermission('View User');
        static::CreatePermission('Edit User');
        static::CreatePermission('Add User');
    }

    protected static function CreatePermission(string $name)
    {
        try {
            $permission = Permission::findByName($name);
        } catch (PermissionDoesNotExist $ex) {
            Permission::create(['name' => $name]);
        }
        return;
    }
}

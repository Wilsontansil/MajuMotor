<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->kode = 'ADM';
        $admin->name='Admin';
        $admin->username='admin';
        $admin->password=Hash::make('123456');
        $admin->save();

        $permissons = Permission::where('guard_name','web')->get();
        $admin->syncPermissions($permissons);
    }
}

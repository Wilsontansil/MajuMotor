<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        // $admin->assignRole('admin');
    }
}

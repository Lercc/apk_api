<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'APLICATION',
            'email' => 'apk.aplication@admin.com',
            'password' => bcrypt('APKAPLICATION2021ADMIN')
        ])->syncRoles('aplication');
        
        User::create([
            'name' => 'APK ADMIN',
            'email' => 'apk@admin.com',
            'password' => bcrypt('APK2021ADMIN')
        ])->syncRoles('admin');
        
        User::create([
            'name' => 'luis roque ccanto',
            'email' => 'lercc.en@gmail.com.com',
            'password' => bcrypt('LUIS2021EMPLOYEE')
        ])->syncRoles('employee');
    }
}

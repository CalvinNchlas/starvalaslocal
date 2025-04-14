<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Company;
use App\Models\Currency;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Company::factory(3)->create();
        Currency::factory(50)->create();

        $count = 0;
        Admin::factory(3)->create()->each(function ($user) use (&$count) {
            $count++;
            $user->name = 'Admin ' . $count;
            $user->email = 'admin' . $count . '@yopmail.com';
            $user->save();
        });

        $count = 0;
        User::factory(30)->create()->each(function ($user) use (&$count) {
            $count++;
            $user->name = 'User ' . $count;
            $user->email = 'user' . $count . '@yopmail.com';
            $user->save();
        });

        $this->call(RoleAndPermissionSeeder::class);
    }
}

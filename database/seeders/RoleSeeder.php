<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\RolePermission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            [
                'name' => "Super Admin",
                'slug' => "super-admin"
            ],
            [
                'name' => "Admin",
                'slug' => "admin"
            ],
            [
                'name' => "User",
                'slug' => "user"
            ]
        ];

        foreach ($roles as $key => $role) {
            Role::updateOrCreate($role);
        }
    }
}

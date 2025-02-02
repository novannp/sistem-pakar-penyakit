<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
        $user = User::create([
            'name' => 'Aulia',
            'username' => 'aulia',
            'password' => bcrypt('aulia123')
        ]);

        $role = Role::create(['name' => 'Pengguna']);

        $role->syncPermissions([24, 25, 26, 27]);

        $user->assignRole([$role->id]);
    }
}

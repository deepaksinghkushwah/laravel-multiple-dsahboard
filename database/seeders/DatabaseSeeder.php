<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'registered']);

        /*Permission::create(['name' => 'post.create']);
        Permission::create(['name' => 'post.delete']);
        Permission::create(['name' => 'post.edit']);*/

        $admin = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@localhost.com',
        ]);
        $admin->assignRole('admin');

        $manager = \App\Models\User::factory()->create([
            'name' => 'manager',
            'email' => 'manager@localhost.com',
        ]);
        $manager->assignRole('manager');

        $user = \App\Models\User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@localhost.com',
        ]);
        $user->assignRole('registered');
    }
}

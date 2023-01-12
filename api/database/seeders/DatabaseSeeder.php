<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Currcilam;
use App\Models\Lead;
use App\Models\User;
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

        // $user = new User();
        // $user->name = 'Super Admin';
        // $user->email = 'super@admin.com';
        // $user->password = bcrypt('password');
        // $user->save();


        // $role = Role::create([
        //     'name' => 'Super Admin'
        // ]);

        // $permission = Permission::create([
        //     'name' => 'create-admin'
        // ]);

        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);

        // $user->assignRole($role);

        $this->create_user_with_role('super-admin', 'Super Admin', 'super@admin.com');
        $this->create_user_with_role('admin', 'admin', 'admin@admin.com');
        $teacher = $this->create_user_with_role('teacher', 'teacher', 'teacher@admin.com');

        // create lead
        $lead = Lead::factory()->count(100)->create();

        $course = Course::create([
            'name' => 'Laravel',
            'description' => 'As an example, let modify the default DatabaseSeeder class and add a database insert statement to the run method',
            'image' => 'https://cdn.worldvectorlogo.com/logos/laravel-2.svg',
            'user_id' => 3,
        ]);

        $currcilam = Currcilam::factory()->count(10)->create();
    }

    private function create_user_with_role($type, $name, $email)
    {
        $role = Role::create([
            'name' => $type
        ]);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt('password')
        ]);

        if ($type == 'super-admin') {
            $permission = Permission::create([
                'name' => 'create-admin'
            ]);

            $role->givePermissionTo($permission);
            $permission->assignRole($role);
        }

        $user->assignRole($role);
    }
}

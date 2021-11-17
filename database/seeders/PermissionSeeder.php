<?php

namespace Database\Seeders;
use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moduleAppDashboard = Module::updateOrCreate(['name' => 'Admin Dashboard']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppDashboard->id,
            'name' => 'Access Dashboard',
            'slug' => 'app.dashboard'
        ]);

        $moduleAppRole = Module::updateOrCreate(['name' => 'Role Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'View (Global)',
            'slug' => 'app.roles.global'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'View (Self)',
            'slug' => 'app.roles.self'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Create Role',
            'slug' => 'app.roles.create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Edit Role',
            'slug' => 'app.roles.edit'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppRole->id,
            'name' => 'Delete Role',
            'slug' => 'app.roles.destroy'
        ]);



        $moduleAppUser = Module::updateOrCreate(['name' => 'User Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'View (Global)',
            'slug' => 'app.users.global'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'View (Self)',
            'slug' => 'app.users.self'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Create User',
            'slug' => 'app.users.create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Edit User',
            'slug' => 'app.users.edit'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Delete User',
            'slug' => 'app.users.destroy'
        ]);

        $moduleAppBlogCategory = Module::updateOrCreate(['name' => 'Blog-Category Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogCategory->id,
            'name' => 'View (Global)',
            'slug' => 'app.blog.categories.global'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogCategory->id,
            'name' => 'View (Self)',
            'slug' => 'app.blog.categories.self'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogCategory->id,
            'name' => 'Create BlogCategory',
            'slug' => 'app.blog.categories.create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogCategory->id,
            'name' => 'Edit BlogCategory',
            'slug' => 'app.blog.categories.edit'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogCategory->id,
            'name' => 'Delete BlogCategory',
            'slug' => 'app.blog.categories.destroy'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogCategory->id,
            'name' => 'Approve BlogCategory',
            'slug' => 'app.blog.categories.approve'
        ]);

    }
}

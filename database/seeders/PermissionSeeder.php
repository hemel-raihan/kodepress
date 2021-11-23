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


        $moduleAppBlogPost = Module::updateOrCreate(['name' => 'Blog-Post Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogPost->id,
            'name' => 'View (Global)',
            'slug' => 'app.blog.posts.global'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogPost->id,
            'name' => 'View (Self)',
            'slug' => 'app.blog.posts.self'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogPost->id,
            'name' => 'Create BlogPost',
            'slug' => 'app.blog.posts.create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogPost->id,
            'name' => 'Edit BlogPost',
            'slug' => 'app.blog.posts.edit'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogPost->id,
            'name' => 'Details BlogPost',
            'slug' => 'app.blog.posts.details'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogPost->id,
            'name' => 'Delete BlogPost',
            'slug' => 'app.blog.posts.destroy'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogPost->id,
            'name' => 'Approve BlogPost',
            'slug' => 'app.blog.posts.status'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppBlogPost->id,
            'name' => 'Approve BlogPost',
            'slug' => 'app.blog.posts.approve'
        ]);


        $moduleAppContentCategory = Module::updateOrCreate(['name' => 'Content-Category Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppContentCategory->id,
            'name' => 'View (Global)',
            'slug' => 'app.content.categories.global'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentCategory->id,
            'name' => 'View (Self)',
            'slug' => 'app.content.categories.self'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentCategory->id,
            'name' => 'Create ContentCategory',
            'slug' => 'app.content.categories.create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentCategory->id,
            'name' => 'Edit ContentCategory',
            'slug' => 'app.content.categories.edit'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentCategory->id,
            'name' => 'Delete ContentCategory',
            'slug' => 'app.content.categories.destroy'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentCategory->id,
            'name' => 'Approve ContentCategory',
            'slug' => 'app.content.categories.approve'
        ]);


        $moduleAppContentPost = Module::updateOrCreate(['name' => 'Content-Post Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppContentPost->id,
            'name' => 'View (Global)',
            'slug' => 'app.content.posts.global'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentPost->id,
            'name' => 'View (Self)',
            'slug' => 'app.content.posts.self'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentPost->id,
            'name' => 'Create ContentPost',
            'slug' => 'app.content.posts.create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentPost->id,
            'name' => 'Edit ContentPost',
            'slug' => 'app.content.posts.edit'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentPost->id,
            'name' => 'Details ContentPost',
            'slug' => 'app.content.posts.details'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentPost->id,
            'name' => 'Delete ContentPost',
            'slug' => 'app.content.posts.destroy'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentPost->id,
            'name' => 'Approve ContentPost',
            'slug' => 'app.content.posts.status'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppContentPost->id,
            'name' => 'Approve ContentPost',
            'slug' => 'app.content.posts.approve'
        ]);


        $moduleAppPage = Module::updateOrCreate(['name' => 'Page Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppPage->id,
            'name' => 'View (Global)',
            'slug' => 'app.pages.global'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppPage->id,
            'name' => 'View (Self)',
            'slug' => 'app.pages.self'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppPage->id,
            'name' => 'Create Page',
            'slug' => 'app.pages.create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppPage->id,
            'name' => 'Edit Page',
            'slug' => 'app.pages.edit'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppPage->id,
            'name' => 'Details Page',
            'slug' => 'app.pages.details'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppPage->id,
            'name' => 'Delete Page',
            'slug' => 'app.pages.destroy'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppPage->id,
            'name' => 'Approve Page',
            'slug' => 'app.pages.status'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppPage->id,
            'name' => 'Approve Page',
            'slug' => 'app.pages.approve'
        ]);


        $moduleAppSidebar = Module::updateOrCreate(['name' => 'Sidebar Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppSidebar->id,
            'name' => 'View (Global)',
            'slug' => 'app.sidebars.global'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSidebar->id,
            'name' => 'View (Self)',
            'slug' => 'app.sidebars.self'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSidebar->id,
            'name' => 'Create Sidebar',
            'slug' => 'app.sidebars.create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSidebar->id,
            'name' => 'Edit Sidebar',
            'slug' => 'app.sidebars.edit'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSidebar->id,
            'name' => 'Details Sidebar',
            'slug' => 'app.sidebars.details'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSidebar->id,
            'name' => 'Delete Sidebar',
            'slug' => 'app.sidebars.destroy'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSidebar->id,
            'name' => 'Approve Sidebar',
            'slug' => 'app.sidebars.status'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleAppSidebar->id,
            'name' => 'Approve Sidebar',
            'slug' => 'app.sidebars.approve'
        ]);

    }
}

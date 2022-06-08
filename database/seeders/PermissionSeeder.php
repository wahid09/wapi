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
        $ModuleDashboard = Module::updateOrCreate([
            'name' => 'Admin Dashboard',
            'name_bn' => 'অ্যাডমিন ড্যাশবোর্ড'
        ]);

        Permission::updateOrCreate([
            'module_id' => $ModuleDashboard->id,
            'name' => 'Access Dashboard',
            'slug' => 'access-dashboard'
        ]);

        $moduleRole = Module::updateOrCreate([
            'name' => 'Role Management',
            'name_bn' => 'রোল ম্যানেজমেন্ট'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleRole->id,
            'name' => 'Access Role',
            'slug' => 'role-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleRole->id,
            'name' => 'Create Role',
            'slug' => 'role-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleRole->id,
            'name' => 'Update Role',
            'slug' => 'role-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleRole->id,
            'name' => 'Delete Role',
            'slug' => 'role-delete'
        ]);
        // User
        $moduleUser = Module::updateOrCreate([
            'name' => 'User Management',
            'name_bn' => 'ইউসার ম্যানেজমেন্ট'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleUser->id,
            'name' => 'Access User',
            'slug' => 'user-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleUser->id,
            'name' => 'Create User',
            'slug' => 'user-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleUser->id,
            'name' => 'Update User',
            'slug' => 'user-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleUser->id,
            'name' => 'Delete User',
            'slug' => 'user-delete'
        ]);
        //Backup
        $moduleBackup = Module::updateOrCreate([
            'name' => 'Backups',
            'name_bn' => 'ব্যাকআপ'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleBackup->id,
            'name' => 'Access Backup',
            'slug' => 'backup-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleBackup->id,
            'name' => 'Create Backup',
            'slug' => 'backup-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleBackup->id,
            'name' => 'Update Backup',
            'slug' => 'backup-download'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleBackup->id,
            'name' => 'Delete Backup',
            'slug' => 'backup-delete'
        ]);
        //Area
        $moduleArea = Module::updateOrCreate([
            'name' => 'Areas',
            'name_bn' => 'অঞ্চল'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleArea->id,
            'name' => 'Access Area',
            'slug' => 'area-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleArea->id,
            'name' => 'Create Area',
            'slug' => 'area-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleArea->id,
            'name' => 'Update Area',
            'slug' => 'area-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleArea->id,
            'name' => 'Delete Area',
            'slug' => 'area-delete'
        ]);

        //Module
        $module = Module::updateOrCreate([
            'name' => 'Module',
            'name_bn' => 'Module'
        ]);
        Permission::updateOrCreate([
            'module_id' => $module->id,
            'name' => 'Access Module',
            'slug' => 'module-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $module->id,
            'name' => 'Create Module',
            'slug' => 'module-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $module->id,
            'name' => 'Update Module',
            'slug' => 'module-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $module->id,
            'name' => 'Delete Module',
            'slug' => 'module-delete'
        ]);

        //Permission
        $modulePermission = Module::updateOrCreate([
            'name' => 'Permission',
            'name_bn' => 'Permission'
        ]);
        Permission::updateOrCreate([
            'module_id' => $modulePermission->id,
            'name' => 'Access Permission',
            'slug' => 'permission-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $modulePermission->id,
            'name' => 'Create Permission',
            'slug' => 'permission-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $modulePermission->id,
            'name' => 'Update Permission',
            'slug' => 'permission-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $modulePermission->id,
            'name' => 'Delete Permission',
            'slug' => 'permission-delete'
        ]);

        //Pages
        $modulePage = Module::updateOrCreate([
            'name' => 'page',
            'name_bn' => 'পেজ'
        ]);
        Permission::updateOrCreate([
            'module_id' => $modulePage->id,
            'name' => 'Access Page',
            'slug' => 'page-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $modulePage->id,
            'name' => 'Create Page',
            'slug' => 'page-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $modulePage->id,
            'name' => 'Update page',
            'slug' => 'page-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $modulePage->id,
            'name' => 'Delete Page',
            'slug' => 'page-delete'
        ]);

        //Slider
        $moduleSlider = Module::updateOrCreate([
            'name' => 'Slider',
            'name_bn' => 'স্লাইডার'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleSlider->id,
            'name' => 'Access Slider',
            'slug' => 'slider-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleSlider->id,
            'name' => 'Create Slider',
            'slug' => 'slider-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleSlider->id,
            'name' => 'Update Slider',
            'slug' => 'slider-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleSlider->id,
            'name' => 'Delete Slider',
            'slug' => 'slider-delete'
        ]);

        //Message
        $moduleMessage = Module::updateOrCreate([
            'name' => 'Message',
            'name_bn' => 'বাণী'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleMessage->id,
            'name' => 'Access Message',
            'slug' => 'message-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleMessage->id,
            'name' => 'Create Message',
            'slug' => 'message-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleMessage->id,
            'name' => 'Update Message',
            'slug' => 'message-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleMessage->id,
            'name' => 'Delete Message',
            'slug' => 'message-delete'
        ]);

        //Program
        $moduleProgram = Module::updateOrCreate([
            'name' => 'Program',
            'name_bn' => 'কর্মসূচী'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleProgram->id,
            'name' => 'Access Program',
            'slug' => 'program-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleProgram->id,
            'name' => 'Create Program',
            'slug' => 'program-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleProgram->id,
            'name' => 'Update Program',
            'slug' => 'program-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleProgram->id,
            'name' => 'Delete Program',
            'slug' => 'program-delete'
        ]);

        //Event
        $moduleEvent = Module::updateOrCreate([
            'name' => 'Event',
            'name_bn' => 'ইভেন্টস'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleEvent->id,
            'name' => 'Access Event',
            'slug' => 'event-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleEvent->id,
            'name' => 'Create Event',
            'slug' => 'event-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleEvent->id,
            'name' => 'Update Event',
            'slug' => 'event-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleEvent->id,
            'name' => 'Delete Event',
            'slug' => 'event-delete'
        ]);

        //Page Content
        $moduleContent = Module::updateOrCreate([
            'name' => 'Page Content',
            'name_bn' => 'পেজ কনটেন্ট'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleContent->id,
            'name' => 'Access Content',
            'slug' => 'content-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleContent->id,
            'name' => 'Create Content',
            'slug' => 'content-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleContent->id,
            'name' => 'Update Content',
            'slug' => 'content-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleContent->id,
            'name' => 'Delete Content',
            'slug' => 'content-delete'
        ]);
        //Category
        $moduleCategory = Module::updateOrCreate([
            'name' => 'Category',
            'name_bn' => 'ক্যাটাগরি'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleCategory->id,
            'name' => 'Access Category',
            'slug' => 'category-index'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleCategory->id,
            'name' => 'Create Category',
            'slug' => 'category-create'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleCategory->id,
            'name' => 'Update Category',
            'slug' => 'category-update'
        ]);
        Permission::updateOrCreate([
            'module_id' => $moduleCategory->id,
            'name' => 'Delete Category',
            'slug' => 'category-delete'
        ]);
    }
}

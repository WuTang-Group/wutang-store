<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SeedRolesAndPermissionsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 需清除缓存，否则会报错
        app(Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        // 先创建权限
        Permission::create(['name' => 'add_users']);
        Permission::create(['name' => 'delete_users']);
        Permission::create(['name' => 'edit_users']);
        Permission::create(['name' => 'read_users']);

        // 创建管理员角色，并赋予权限
        $admin = Role::create(['name' => 'admin']);
        // 创建前台用户角色以及访客角色
        Role::create(['name' => 'customer']);
        Role::create(['name' => 'visitor']);
        $admin->givePermissionTo('add_users');
        $admin->givePermissionTo('delete_users');
        $admin->givePermissionTo('edit_users');
        $admin->givePermissionTo('read_users');

        // 默认插入一条管理员数据
        $user = \App\Models\User::create([
            'name'=>'Admin',
            'username' => 'admin',
            'phone'=>'12312312312',
            'email'=>'admin@admin.com',
            'email_verified_at'=>now(),
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' =>\Illuminate\Support\Str::random(15),
            'invitation_code'=>'999999',
            'status' => 1,
            'avatar'=>'http://thirdwx.qlogo.cn/mmopen/vi_32/M5SibDXA0k8bbEGpFAZkyNcUCBZicicgY2RNMEMcoJFwubweq7uocgq6EiacaYpNTFswWicSSfTIYOBKZPnLLwnKgqw/132',
        ]);
        // 授予用户角色
        $user->assignRole('admin');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 需清除缓存，否则会报错
        app(Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        // 清空所有数据表数据
        $tableNames = config('permission.table_names');

        Model::unguard();
        DB::table($tableNames['role_has_permissions'])->delete();
        DB::table($tableNames['model_has_roles'])->delete();
        DB::table($tableNames['model_has_permissions'])->delete();
        DB::table($tableNames['roles'])->delete();
        DB::table($tableNames['permissions'])->delete();
        Model::reguard();
    }
}

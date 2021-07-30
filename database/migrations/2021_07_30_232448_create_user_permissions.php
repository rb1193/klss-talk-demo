<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateUserPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $role = Role::create(['name' => 'admin']);
        $createUsers = Permission::create(['name' => 'create-users']);
        $updateUsers = Permission::create(['name' => 'update-users']);
        $deleteUsers = Permission::create(['name' => 'delete-users']);
        $role->syncPermissions([$createUsers, $updateUsers, $deleteUsers]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // TODO
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::create([
        'name' => 'Admin',
        'email' => 'admin@app.com',
        'password' => 'password'
      ]);

      $role = Role::create(['name' => 'admin']);
      $permissions = Permission::pluck('id','id')->all();
   
      $role->syncPermissions($permissions);
    
      $user->assignRole([$role->id]);
    }
}

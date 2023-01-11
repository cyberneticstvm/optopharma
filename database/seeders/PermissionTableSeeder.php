<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
         ];
       
         /*foreach ($permissions as $permission) {
              Permission::create(['name' => $permission, 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
         }*/
         /*$data = [];
         foreach($permissions as $permission):
            $data[] = [
                'name' => $permission,
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
         endforeach;*/
         $tenant = User::latest('id')->first();
         Config::set('database.connections.mysql_tenant.database', $tenant->db_name);
         DB::reconnect('mysql_tenant');
         foreach ($permissions as $permission) {
            DB::connection('mysql_tenant')->table('permissions')->insert(['name' => $permission, 'guard_name' => 'web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
         }
    }
}

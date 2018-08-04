<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
        	[
	        	'label' => 'Site Profile',
	        	'name_permission' => 'site.profile'
        	]
        ];
        foreach ($permissions as $permission) {
            DB::table('permissions')->insert([
                'label' => $permission['label'],
                'name_permission' => $permission['name_permission']
            ]);    
        }

        $this->attachToRole();
    }

    public function attachToRole()
    {
    	$subscriberPermissions = Permission::whereIn('name_permission',['site.profile'])->get();

    	foreach($subscriberPermissions as $subPerm){
    		$subPerm->roles()->attach(5);
    	}
    }
}

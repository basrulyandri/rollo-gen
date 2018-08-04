<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Superadmin','Administrator','Apoteker','Member','Subscriber'];
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
            ]);    
        }
    }
}

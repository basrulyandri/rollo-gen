<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'phone' => '081122334455',
            'address' => 'Pondok Indah, Jakarta Selatan'
        ]);
    }
}

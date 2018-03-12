<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    private $roles = ['Administrator', 'Client'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        foreach ($this->roles as $role) {
            App\Models\Role::create(['title' => $role]);
        }
    }
}

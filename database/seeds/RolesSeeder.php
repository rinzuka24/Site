<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Admin', 
            'slug' => 'author',
            'permissions' => [
                'website.create' => true,
            ]
        ]);
        $user = Role::create([
            'name' => 'User1', 
            'slug' => 'editor',
            'permissions' => [
                'website.update' => true,
                'website.publish' => true,
            ]
        ]);
    }
}

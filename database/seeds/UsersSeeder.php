<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admin = Role::where('slug', 'author')->first();
       $user = Role::where('slug', 'editor')->first();
        
        $user1 = User::create([
            'name' => 'User1', 
            'email' => 'user1@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user1->roles()->attach($author);
        
        $user2 = User::create([
            'name' => 'User2', 
            'email' => 'user2@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user2->roles()->attach($author);
        
        $user3 = User::create([
            'name' => 'User3', 
            'email' => 'user3@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user2->roles()->attach($editor);
    }
    }
}

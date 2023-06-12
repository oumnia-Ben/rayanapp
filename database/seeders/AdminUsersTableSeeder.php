<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$Fdyd7yoTylVPhxVdHjWT5.adeL.e/mO6o1tOOVb3tHBvcyGroDkcu',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => 'sgoFxs1FfDGTGZrnBTyRJKvEpzlAzaV9iaALmr6BpJWMi2nOQc4MrdQZpYPw',
                'created_at' => '2023-01-25 18:46:51',
                'updated_at' => '2023-01-25 18:46:51',
            ),
        ));
        
        
    }
}
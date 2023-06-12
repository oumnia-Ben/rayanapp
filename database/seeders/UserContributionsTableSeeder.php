<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserContributionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_contributions')->delete();
        
        \DB::table('user_contributions')->insert(array (
            0 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 200.0,
            ),
            1 => 
            array (
                'id' => 35,
                'user_id' => 2,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 200.0,
            ),
            2 => 
            array (
                'id' => 36,
                'user_id' => 3,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 200.0,
            ),
            3 => 
            array (
                'id' => 37,
                'user_id' => 4,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 200.0,
            ),
            4 => 
            array (
                'id' => 38,
                'user_id' => 5,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 200.0,
            ),
            5 => 
            array (
                'id' => 39,
                'user_id' => 6,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 200.0,
            ),
            6 => 
            array (
                'id' => 40,
                'user_id' => 7,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 200.0,
            ),
            7 => 
            array (
                'id' => 41,
                'user_id' => 8,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 200.0,
            ),
            8 => 
            array (
                'id' => 42,
                'user_id' => 9,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 200.0,
            ),
            9 => 
            array (
                'id' => 43,
                'user_id' => 10,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => '2023-01-29 19:22:45',
                'amount' => 150.0,
            ),
            10 => 
            array (
                'id' => 44,
                'user_id' => 11,
                'contribution_id' => 15,
                'created_at' => NULL,
                'updated_at' => '2023-01-29 19:33:52',
                'amount' => 200.0,
            ),
            11 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'contribution_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 125.0,
            ),
            12 => 
            array (
                'id' => 46,
                'user_id' => 2,
                'contribution_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 125.0,
            ),
            13 => 
            array (
                'id' => 47,
                'user_id' => 3,
                'contribution_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 125.0,
            ),
            14 => 
            array (
                'id' => 49,
                'user_id' => 5,
                'contribution_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 125.0,
            ),
            15 => 
            array (
                'id' => 51,
                'user_id' => 7,
                'contribution_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 125.0,
            ),
            16 => 
            array (
                'id' => 52,
                'user_id' => 8,
                'contribution_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'amount' => 125.0,
            ),
        ));
        
        
    }
}
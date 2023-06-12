<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 4,
                'date' => '2023-01-29',
                'amount' => 200.0,
                'banque_id' => 8,
                'file' => NULL,
                'is_confirmed' => 1,
                'comment' => NULL,
                'created_at' => '2023-01-29 19:32:15',
                'updated_at' => '2023-01-29 19:32:15',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 7,
                'date' => '2023-01-29',
                'amount' => 200.0,
                'banque_id' => 8,
                'file' => NULL,
                'is_confirmed' => 1,
                'comment' => NULL,
                'created_at' => '2023-01-29 19:32:25',
                'updated_at' => '2023-01-29 19:32:25',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 10,
                'date' => '2023-01-29',
                'amount' => 450.0,
                'banque_id' => 8,
                'file' => NULL,
                'is_confirmed' => 1,
                'comment' => NULL,
                'created_at' => '2023-01-29 19:33:16',
                'updated_at' => '2023-01-29 19:33:16',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'date' => '2023-01-29',
                'amount' => 600.0,
                'banque_id' => 8,
                'file' => NULL,
                'is_confirmed' => 1,
                'comment' => NULL,
                'created_at' => '2023-01-29 19:45:24',
                'updated_at' => '2023-01-29 19:45:24',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'date' => '2023-01-29',
                'amount' => 200.0,
                'banque_id' => 8,
                'file' => NULL,
                'is_confirmed' => 0,
                'comment' => NULL,
                'created_at' => '2023-01-29 20:02:24',
                'updated_at' => '2023-01-29 20:26:18',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 7,
                'date' => '2023-01-29',
                'amount' => 125.0,
                'banque_id' => 9,
                'file' => NULL,
                'is_confirmed' => 1,
                'comment' => NULL,
                'created_at' => '2023-01-29 20:16:14',
                'updated_at' => '2023-01-29 20:16:14',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 3,
                'date' => '2023-01-29',
                'amount' => 125.0,
                'banque_id' => 9,
                'file' => NULL,
                'is_confirmed' => 1,
                'comment' => NULL,
                'created_at' => '2023-01-29 20:16:26',
                'updated_at' => '2023-01-29 20:16:26',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 6,
                'date' => '2023-02-02',
                'amount' => 400.0,
                'banque_id' => 8,
                'file' => 'files/WhatsApp Image 2023-02-02 at 12.05.09.jpeg',
                'is_confirmed' => 1,
                'comment' => NULL,
                'created_at' => '2023-02-04 07:44:14',
                'updated_at' => '2023-02-04 07:48:17',
            ),
        ));
        
        
    }
}
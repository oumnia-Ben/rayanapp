<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserBanquesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_banques')->delete();
        
        \DB::table('user_banques')->insert(array (
            0 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'banque_id' => 8,
                'solde' => 0.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-01-29 14:39:06',
            ),
            1 => 
            array (
                'id' => 47,
                'user_id' => 2,
                'banque_id' => 8,
                'solde' => 0.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-01-29 19:45:24',
            ),
            2 => 
            array (
                'id' => 48,
                'user_id' => 3,
                'banque_id' => 8,
                'solde' => 0.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-01-29 20:26:18',
            ),
            3 => 
            array (
                'id' => 49,
                'user_id' => 4,
                'banque_id' => 8,
                'solde' => 0.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-02-03 20:10:49',
            ),
            4 => 
            array (
                'id' => 50,
                'user_id' => 5,
                'banque_id' => 8,
                'solde' => 0.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-01-29 14:39:06',
            ),
            5 => 
            array (
                'id' => 51,
                'user_id' => 6,
                'banque_id' => 8,
                'solde' => 0.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-02-04 07:48:17',
            ),
            6 => 
            array (
                'id' => 52,
                'user_id' => 7,
                'banque_id' => 8,
                'solde' => 0.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-02-03 20:10:49',
            ),
            7 => 
            array (
                'id' => 53,
                'user_id' => 8,
                'banque_id' => 8,
                'solde' => 0.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-01-29 14:39:06',
            ),
            8 => 
            array (
                'id' => 54,
                'user_id' => 9,
                'banque_id' => 8,
                'solde' => 0.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-01-29 14:39:06',
            ),
            9 => 
            array (
                'id' => 55,
                'user_id' => 10,
                'banque_id' => 8,
                'solde' => 300.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-02-03 20:10:49',
            ),
            10 => 
            array (
                'id' => 56,
                'user_id' => 11,
                'banque_id' => 8,
                'solde' => 0.0,
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-01-29 14:39:06',
            ),
            11 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-01-29 20:08:47',
            ),
            12 => 
            array (
                'id' => 58,
                'user_id' => 2,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-01-29 20:08:47',
            ),
            13 => 
            array (
                'id' => 59,
                'user_id' => 3,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-02-03 20:10:49',
            ),
            14 => 
            array (
                'id' => 60,
                'user_id' => 4,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-01-29 20:08:47',
            ),
            15 => 
            array (
                'id' => 61,
                'user_id' => 5,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-01-29 20:08:47',
            ),
            16 => 
            array (
                'id' => 62,
                'user_id' => 6,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-01-29 20:08:47',
            ),
            17 => 
            array (
                'id' => 63,
                'user_id' => 7,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-02-03 20:10:49',
            ),
            18 => 
            array (
                'id' => 64,
                'user_id' => 8,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-01-29 20:08:47',
            ),
            19 => 
            array (
                'id' => 65,
                'user_id' => 9,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-01-29 20:08:47',
            ),
            20 => 
            array (
                'id' => 66,
                'user_id' => 10,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-01-29 20:08:47',
            ),
            21 => 
            array (
                'id' => 67,
                'user_id' => 11,
                'banque_id' => 9,
                'solde' => 0.0,
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-01-29 20:08:47',
            ),
        ));
        
        
    }
}
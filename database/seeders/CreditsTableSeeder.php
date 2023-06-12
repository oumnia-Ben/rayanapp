<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreditsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('credits')->delete();
        
        \DB::table('credits')->insert(array (
            0 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois janvier',
                'date' => '2023-01-29',
                'amount' => 200.0,
                'paid' => 0.0,
                'rest' => 200.0,
                'notified_at' => NULL,
                'created_at' => '2023-01-29 19:30:31',
                'updated_at' => '2023-01-29 19:30:31',
                'banque_id' => 8,
            ),
            1 => 
            array (
                'id' => 12,
                'user_id' => 2,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois janvier',
                'date' => '2023-01-29',
                'amount' => 600.0,
                'paid' => 600.0,
                'rest' => 0.0,
                'notified_at' => NULL,
                'created_at' => '2023-01-29 19:30:45',
                'updated_at' => '2023-01-29 19:30:45',
                'banque_id' => 8,
            ),
            2 => 
            array (
                'id' => 13,
                'user_id' => 6,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois janvier',
                'date' => '2023-01-29',
                'amount' => 200.0,
                'paid' => 200.0,
                'rest' => 0.0,
                'notified_at' => NULL,
                'created_at' => '2023-01-29 19:31:17',
                'updated_at' => '2023-02-04 07:48:17',
                'banque_id' => 8,
            ),
            3 => 
            array (
                'id' => 14,
                'user_id' => 8,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois janvier',
                'date' => '2023-01-29',
                'amount' => 200.0,
                'paid' => 0.0,
                'rest' => 200.0,
                'notified_at' => NULL,
                'created_at' => '2023-01-29 19:31:42',
                'updated_at' => '2023-01-29 19:31:42',
                'banque_id' => 8,
            ),
            4 => 
            array (
                'id' => 15,
                'user_id' => 11,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois janvier',
                'date' => '2023-01-29',
                'amount' => 600.0,
                'paid' => 0.0,
                'rest' => 600.0,
                'notified_at' => NULL,
                'created_at' => '2023-01-29 19:34:09',
                'updated_at' => '2023-01-29 19:34:09',
                'banque_id' => 8,
            ),
            5 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 200.0,
                'paid' => 0.0,
                'rest' => 200.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 8,
            ),
            6 => 
            array (
                'id' => 17,
                'user_id' => 2,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 200.0,
                'paid' => 0.0,
                'rest' => 200.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 8,
            ),
            7 => 
            array (
                'id' => 18,
                'user_id' => 3,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 200.0,
                'paid' => 0.0,
                'rest' => 200.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 8,
            ),
            8 => 
            array (
                'id' => 19,
                'user_id' => 4,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 200.0,
                'paid' => 200.0,
                'rest' => 0.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 8,
            ),
            9 => 
            array (
                'id' => 20,
                'user_id' => 5,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 200.0,
                'paid' => 0.0,
                'rest' => 200.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 8,
            ),
            10 => 
            array (
                'id' => 21,
                'user_id' => 6,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 200.0,
                'paid' => 200.0,
                'rest' => 0.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-04 07:48:17',
                'banque_id' => 8,
            ),
            11 => 
            array (
                'id' => 22,
                'user_id' => 7,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 200.0,
                'paid' => 200.0,
                'rest' => 0.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 8,
            ),
            12 => 
            array (
                'id' => 23,
                'user_id' => 8,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 200.0,
                'paid' => 0.0,
                'rest' => 200.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 8,
            ),
            13 => 
            array (
                'id' => 24,
                'user_id' => 9,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 200.0,
                'paid' => 0.0,
                'rest' => 200.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 8,
            ),
            14 => 
            array (
                'id' => 25,
                'user_id' => 10,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 150.0,
                'paid' => 150.0,
                'rest' => 0.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 8,
            ),
            15 => 
            array (
                'id' => 26,
                'user_id' => 11,
                'contribution_id' => 15,
                'name' => 'Cotisation mensuelle du mois février',
                'date' => '2023-02-03',
                'amount' => 200.0,
                'paid' => 0.0,
                'rest' => 200.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 8,
            ),
            16 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'contribution_id' => 16,
                'name' => 'Frais internet du mois février',
                'date' => '2023-02-03',
                'amount' => 125.0,
                'paid' => 0.0,
                'rest' => 125.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 9,
            ),
            17 => 
            array (
                'id' => 28,
                'user_id' => 2,
                'contribution_id' => 16,
                'name' => 'Frais internet du mois février',
                'date' => '2023-02-03',
                'amount' => 125.0,
                'paid' => 0.0,
                'rest' => 125.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 9,
            ),
            18 => 
            array (
                'id' => 29,
                'user_id' => 3,
                'contribution_id' => 16,
                'name' => 'Frais internet du mois février',
                'date' => '2023-02-03',
                'amount' => 125.0,
                'paid' => 125.0,
                'rest' => 0.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 9,
            ),
            19 => 
            array (
                'id' => 30,
                'user_id' => 5,
                'contribution_id' => 16,
                'name' => 'Frais internet du mois février',
                'date' => '2023-02-03',
                'amount' => 125.0,
                'paid' => 0.0,
                'rest' => 125.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 9,
            ),
            20 => 
            array (
                'id' => 31,
                'user_id' => 7,
                'contribution_id' => 16,
                'name' => 'Frais internet du mois février',
                'date' => '2023-02-03',
                'amount' => 125.0,
                'paid' => 125.0,
                'rest' => 0.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 9,
            ),
            21 => 
            array (
                'id' => 32,
                'user_id' => 8,
                'contribution_id' => 16,
                'name' => 'Frais internet du mois février',
                'date' => '2023-02-03',
                'amount' => 125.0,
                'paid' => 0.0,
                'rest' => 125.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
                'banque_id' => 9,
            ),
        ));
        
        
    }
}
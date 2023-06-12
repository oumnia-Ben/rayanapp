<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BanquePaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banque_payments')->delete();
        
        \DB::table('banque_payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'banque_id' => 8,
                'banque_credit_id' => 5,
                'date' => '2023-01-29',
                'amount' => 600.0,
                'file' => NULL,
                'is_confirmed' => 1,
                'comment' => NULL,
                'created_at' => '2023-01-29 19:51:34',
                'updated_at' => '2023-01-29 19:51:34',
            ),
        ));
        
        
    }
}
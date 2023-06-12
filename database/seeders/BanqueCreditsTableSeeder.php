<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BanqueCreditsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banque_credits')->delete();
        
        \DB::table('banque_credits')->insert(array (
            0 => 
            array (
                'id' => 4,
                'banque_id' => 8,
                'expense_id' => 3,
                'name' => 'Maintenance du mois janvier',
                'date' => '2023-01-31',
                'amount' => 300.0,
                'paid' => 0.0,
                'rest' => 300.0,
                'notified_at' => NULL,
                'created_at' => '2023-01-29 19:25:16',
                'updated_at' => '2023-01-29 19:25:16',
            ),
            1 => 
            array (
                'id' => 5,
                'banque_id' => 8,
                'expense_id' => 2,
                'name' => 'Femme de ménage du mois janvier',
                'date' => '2023-01-29',
                'amount' => 600.0,
                'paid' => 600.0,
                'rest' => 0.0,
                'notified_at' => NULL,
                'created_at' => '2023-01-29 19:25:53',
                'updated_at' => '2023-01-29 19:51:34',
            ),
            2 => 
            array (
                'id' => 6,
                'banque_id' => 8,
                'expense_id' => 1,
                'name' => 'Electricité du mois février',
                'date' => '2023-02-03',
                'amount' => 0.0,
                'paid' => 0.0,
                'rest' => 0.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
            ),
            3 => 
            array (
                'id' => 7,
                'banque_id' => 8,
                'expense_id' => 2,
                'name' => 'Femme de ménage du mois février',
                'date' => '2023-02-03',
                'amount' => 600.0,
                'paid' => 0.0,
                'rest' => 600.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
            ),
            4 => 
            array (
                'id' => 8,
                'banque_id' => 8,
                'expense_id' => 3,
                'name' => 'Maintenance de lascenceur du mois février',
                'date' => '2023-02-03',
                'amount' => 300.0,
                'paid' => 0.0,
                'rest' => 300.0,
                'notified_at' => NULL,
                'created_at' => '2023-02-03 20:10:49',
                'updated_at' => '2023-02-03 20:10:49',
            ),
        ));
        
        
    }
}
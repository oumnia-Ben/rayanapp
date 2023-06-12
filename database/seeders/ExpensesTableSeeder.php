<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExpensesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('expenses')->delete();
        
        \DB::table('expenses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Electricité',
                'period_id' => 2,
                'date_payment' => '2023-01-02',
                'banque_id' => 8,
                'stat' => 1,
                'created_at' => '2023-01-25 22:38:16',
                'updated_at' => '2023-01-29 17:11:34',
                'amount' => 0.0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Femme de ménage',
                'period_id' => 2,
                'date_payment' => '2023-01-01',
                'banque_id' => 8,
                'stat' => 1,
                'created_at' => '2023-01-29 12:25:49',
                'updated_at' => '2023-01-29 17:11:38',
                'amount' => 600.0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Maintenance de lascenceur',
                'period_id' => 2,
                'date_payment' => '2023-01-29',
                'banque_id' => 8,
                'stat' => 1,
                'created_at' => '2023-01-29 12:31:40',
                'updated_at' => '2023-01-29 17:11:42',
                'amount' => 300.0,
            ),
        ));
        
        
    }
}
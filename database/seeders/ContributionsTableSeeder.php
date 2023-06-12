<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContributionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contributions')->delete();
        
        \DB::table('contributions')->insert(array (
            0 => 
            array (
                'id' => 15,
                'name' => 'Cotisation mensuelle',
                'period_id' => 2,
                'date_payment' => '2023-01-29',
                'banque_id' => 8,
                'is_approval' => 0,
                'stat' => 1,
                'created_at' => '2023-01-29 15:15:31',
                'updated_at' => '2023-01-29 15:15:31',
                'amount' => 200.0,
            ),
            1 => 
            array (
                'id' => 16,
                'name' => 'Frais internet',
                'period_id' => 2,
                'date_payment' => '2023-01-18',
                'banque_id' => 9,
                'is_approval' => 0,
                'stat' => 1,
                'created_at' => '2023-01-29 20:09:23',
                'updated_at' => '2023-01-29 20:11:47',
                'amount' => 125.0,
            ),
        ));
        
        
    }
}
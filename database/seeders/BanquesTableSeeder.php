<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BanquesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banques')->delete();
        
        \DB::table('banques')->insert(array (
            0 => 
            array (
                'id' => 8,
                'name' => 'Compte du syndique',
                'rib' => '230780396899821100780043',
                'solde' => '1472.61',
                'created_at' => '2023-01-29 14:39:06',
                'updated_at' => '2023-02-04 07:48:17',
                'solde_init' => '222.61',
                'solde_virt' => 2372.61,
            ),
            1 => 
            array (
                'id' => 9,
                'name' => 'Compte internet',
                'rib' => '01179400007020000038780',
                'solde' => '250',
                'created_at' => '2023-01-29 20:08:47',
                'updated_at' => '2023-02-03 20:10:49',
                'solde_init' => '0',
                'solde_virt' => 625.0,
            ),
        ));
        
        
    }
}
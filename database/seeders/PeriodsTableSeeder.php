<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeriodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('periods')->delete();
        
        \DB::table('periods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Unique',
                'created_at' => '2023-01-25 20:08:07',
                'updated_at' => '2023-01-25 20:08:33',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mensuel',
                'created_at' => '2023-01-25 20:08:18',
                'updated_at' => '2023-01-25 20:08:44',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Annuel',
                'created_at' => '2023-01-25 20:08:22',
                'updated_at' => '2023-01-25 20:08:49',
            ),
        ));
        
        
    }
}
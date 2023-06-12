<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentCreditsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_credits')->delete();
        
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PushSubscriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('push_subscriptions')->delete();
        
        
        
    }
}
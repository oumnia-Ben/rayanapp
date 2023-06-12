<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnnouncementUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('announcement_users')->delete();
        
        
        
    }
}
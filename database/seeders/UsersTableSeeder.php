<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ahmed Ouraibi',
                'email' => 'ahmed.ouraibi@rayan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HftocHHMme/hNBVa6TYiRu06yzrVyAjm.Ta0q.V5fOReDFoIuk4IW',
                'remember_token' => NULL,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => '2023-01-29 19:58:15',
                'phone' => '06 61 22 58 86',
                'stage' => 'Etage 01',
                'apartment' => 'Appartement 01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ahmed Bendahman',
                'email' => 'ahmed.bendahman@rayan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qYk7tbeEMqE/xD15bt9syupQqImhcAvgbNvlCR4JvPWioByFgB6E2',
                'remember_token' => NULL,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => '2023-01-29 19:58:25',
                'phone' => '06 65 43 42 58',
                'stage' => 'Etage 01',
                'apartment' => 'Appartement 02',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Radouane Ettafs',
                'email' => 'radouane.ettafs@rayan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uzNBGN177fDm7tGoyouvPuPEp4t4Nrnq5koNmiXVFvh42FgKGiVei',
                'remember_token' => NULL,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => '2023-01-29 19:59:52',
                'phone' => '0669505751',
                'stage' => 'Etage 02',
                'apartment' => 'Appartement 03',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Radouane Farhat',
                'email' => 'radouane.farhat@rayan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bF3RN/phxkOjO1ayvPvbbeRBnBG3EdWWLf4nmeN6Hm1CPdrHsLOei',
                'remember_token' => NULL,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => '2023-01-29 20:00:14',
                'phone' => '0613191149',
                'stage' => 'Etage 02',
                'apartment' => 'Appartement 04',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Achraf Assif',
                'email' => 'achraf.assif@rayan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6a9yQ4nPllY7ahowm5le9ew7PAqfPepwO.rIwgbuiDqhJjOz.SBQ2',
                'remember_token' => NULL,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => '2023-01-29 20:00:25',
                'phone' => '0665717688',
                'stage' => 'Etage 03',
                'apartment' => 'Appartement 05',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Aziz Nazourh',
                'email' => 'aziz.nazourh@rayan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9M711aJoW5bXyntGZtCqmuM.BlwJol5cYIWOIXqSOj4JNhqmW2pam',
                'remember_token' => NULL,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => '2023-01-29 20:00:34',
                'phone' => '0661611175',
                'stage' => 'Etage 03',
                'apartment' => 'Appartement 06',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Hicham Bennouna',
                'email' => 'bennounahicham@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2FTesxYY4Ha8UCE89kJm3OLynwct54m1Dbxy7Fth8KcYX66YLtkq6',
                'remember_token' => NULL,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => '2023-02-03 21:18:14',
                'phone' => '06 79 59 30 28',
                'stage' => 'Etage 04',
                'apartment' => 'Appartement 07',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Adnane Wafkaoui',
                'email' => 'adnane.wafkaoui@rayan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5Rj84Ie9rdWd7cw3j0Ng.eGVyqKLzi7tCVH25e5vIwZItYqqKYjH.',
                'remember_token' => NULL,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => '2023-01-29 20:00:44',
                'phone' => '0675001235',
                'stage' => 'Etage 04',
                'apartment' => 'Appartement 08',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Café',
                'email' => 'cafe@rayan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dcQzw3qHIHJh3LEfADAN6uDaP/YP7AO9NVkOA8Ol/4RWSwvlAJy5.',
                'remember_token' => NULL,
                'created_at' => '2023-01-29 08:48:59',
                'updated_at' => '2023-01-29 08:48:59',
                'phone' => NULL,
                'stage' => 'Etage 00',
                'apartment' => 'Café',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Para pharmacie',
                'email' => 'para-pharmacie@rayan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sbJ/wd5SoEXjYRTVkclBX.CNRyoPqxPgWqVJlcF3bRQc3tTBTf5.S',
                'remember_token' => NULL,
                'created_at' => '2023-01-29 08:49:36',
                'updated_at' => '2023-01-29 08:49:36',
                'phone' => NULL,
                'stage' => 'Etage 00',
                'apartment' => 'Para pharmacie',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Patisserie',
                'email' => 'patisserie@rayan.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$z.gx7DTEiubr351UDEkx5ewmjQ7.dXWMbN3h3nX2.eegbYLGkf/TS',
                'remember_token' => NULL,
                'created_at' => '2023-01-29 08:50:10',
                'updated_at' => '2023-01-29 08:50:10',
                'phone' => NULL,
                'stage' => 'Etage 00',
                'apartment' => 'Patisserie',
            ),
        ));
        
        
    }
}
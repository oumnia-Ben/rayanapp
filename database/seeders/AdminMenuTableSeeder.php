<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Dashboard',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 11,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-01-25 23:24:31',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 12,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-01-25 23:24:31',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 13,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-01-25 23:24:31',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 14,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-01-25 23:24:31',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 15,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-01-25 23:24:31',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 16,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-01-25 23:24:31',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Habitants',
                'icon' => 'fa-users',
                'uri' => 'users',
                'permission' => NULL,
                'created_at' => '2023-01-25 19:52:48',
                'updated_at' => '2023-01-25 19:52:54',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 3,
                'title' => 'Comptes bancaires',
                'icon' => 'fa-bank',
                'uri' => 'banques',
                'permission' => NULL,
                'created_at' => '2023-01-25 19:58:58',
                'updated_at' => '2023-01-25 19:59:15',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 0,
                'order' => 5,
                'title' => 'Contributions',
                'icon' => 'fa-credit-card',
                'uri' => 'contributions',
                'permission' => NULL,
                'created_at' => '2023-01-25 20:03:32',
                'updated_at' => '2023-01-25 20:06:27',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 4,
                'title' => 'Périodes',
                'icon' => 'fa-calendar-check-o',
                'uri' => 'periods',
                'permission' => NULL,
                'created_at' => '2023-01-25 20:06:21',
                'updated_at' => '2023-01-25 20:06:27',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'order' => 6,
                'title' => 'Crédits',
                'icon' => 'fa-credit-card-alt',
                'uri' => 'credits',
                'permission' => NULL,
                'created_at' => '2023-01-25 20:23:50',
                'updated_at' => '2023-01-25 20:23:53',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 0,
                'order' => 7,
                'title' => 'Paiements',
                'icon' => 'fa-money',
                'uri' => 'payments',
                'permission' => NULL,
                'created_at' => '2023-01-25 21:56:46',
                'updated_at' => '2023-01-25 21:56:49',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 0,
                'order' => 8,
                'title' => 'Charges',
                'icon' => 'fa-shopping-cart',
                'uri' => 'expenses',
                'permission' => NULL,
                'created_at' => '2023-01-25 22:36:06',
                'updated_at' => '2023-01-25 22:36:10',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 0,
                'order' => 9,
                'title' => 'Crédits',
                'icon' => 'fa-cart-plus',
                'uri' => 'banque-credits',
                'permission' => NULL,
                'created_at' => '2023-01-25 22:43:12',
                'updated_at' => '2023-01-25 22:43:17',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 0,
                'order' => 10,
                'title' => 'Paiements',
                'icon' => 'fa-cart-plus',
                'uri' => 'banque-payments',
                'permission' => NULL,
                'created_at' => '2023-01-25 23:24:27',
                'updated_at' => '2023-01-25 23:24:31',
            ),
        ));
        
        
    }
}
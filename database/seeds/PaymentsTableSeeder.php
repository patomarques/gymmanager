<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 3,
                'total' => 1000.01,
                'plan_date_start' => '2020-05-04 00:00:00',
                'plan_date_end' => '2021-05-18 00:00:00',
                'status' => 'adimplente',
                'customer_id' => 6,
                'created_at' => '2020-05-18 07:09:42',
                'updated_at' => '2020-05-31 19:29:33',
                'deleted_at' => NULL,
                'plan_type' => 'anual',
            ),
            1 => 
            array (
                'id' => 5,
                'total' => 58.87,
                'plan_date_start' => '2020-05-18 00:00:00',
                'plan_date_end' => '2020-06-18 00:00:00',
                'status' => 'adimplente',
                'customer_id' => 1,
                'created_at' => '2020-05-18 08:24:30',
                'updated_at' => '2020-05-30 08:45:46',
                'deleted_at' => NULL,
                'plan_type' => 'mensal',
            ),
            2 => 
            array (
                'id' => 6,
                'total' => 380.0,
                'plan_date_start' => '2020-06-01 00:00:00',
                'plan_date_end' => '2020-05-29 00:00:00',
                'status' => 'adimplente',
                'customer_id' => 2,
                'created_at' => '2020-05-31 19:29:14',
                'updated_at' => '2020-05-31 19:29:26',
                'deleted_at' => NULL,
                'plan_type' => 'mensal',
            ),
        ));
        
        
    }
}
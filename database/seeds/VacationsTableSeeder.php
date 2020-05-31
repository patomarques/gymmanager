<?php

use Illuminate\Database\Seeder;

class VacationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vacations')->delete();
        
        
        
    }
}
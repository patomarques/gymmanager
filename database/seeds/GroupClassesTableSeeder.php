<?php

use Illuminate\Database\Seeder;

class GroupClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('group_classes')->delete();
        
        \DB::table('group_classes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'class_date_time' => '2020-06-12 17:00:00',
                'room' => 'Sala de Musculação I',
                'created_at' => '2020-05-31 20:03:59',
                'updated_at' => '2020-05-31 20:06:20',
                'deleted_at' => NULL,
                'title' => 'Musculação I',
                'description' => NULL,
                'instructor_id' => 3,
            ),
            1 => 
            array (
                'id' => 2,
                'class_date_time' => '2020-06-05 17:00:00',
                'room' => 'Sala 5',
                'created_at' => '2020-05-31 20:06:13',
                'updated_at' => '2020-05-31 20:06:13',
                'deleted_at' => NULL,
                'title' => 'FitDance',
                'description' => NULL,
                'instructor_id' => 1,
            ),
        ));
        
        
    }
}
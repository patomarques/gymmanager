<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cliente Gym 4',
                'document' => '33.098.632-6',
                'cpf' => '587.900.695-60',
                'created_at' => '2020-04-29 13:57:26',
                'updated_at' => '2020-05-30 16:03:23',
                'deleted_at' => NULL,
                'user_id' => 8,
                'address' => 'Travessa 25 de Dezembro',
                'number' => '653',
                'postalcode' => '69908-010',
                'state' => 'AC',
                'city' => 'Rio Branco',
                'register_code' => 2020050001,
                'district' => 'Belo Jardim II',
                'status' => 'ativo',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Cliente Gym 3',
                'document' => '11.368-3',
                'cpf' => '104.331.026-67',
                'created_at' => '2020-04-30 08:41:00',
                'updated_at' => '2020-05-30 16:03:18',
                'deleted_at' => NULL,
                'user_id' => 11,
                'address' => 'Travessa Gare',
                'number' => '524',
                'postalcode' => '99072-087',
                'state' => 'RS',
                'city' => 'Passo Fundo',
                'register_code' => 2020050002,
                'district' => 'Centro',
                'status' => 'ativo',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Cliente Gym 2',
                'document' => '1324657',
                'cpf' => '226.731.132-15',
                'created_at' => '2020-05-18 05:22:38',
                'updated_at' => '2020-05-30 16:03:13',
                'deleted_at' => NULL,
                'user_id' => 10,
                'address' => 'Rua Deco Fonteles',
                'number' => '165',
                'postalcode' => '69313-610',
                'state' => 'RR',
                'city' => 'Boa Vista',
                'register_code' => 2020050004,
                'district' => 'Caranã',
                'status' => 'ativo',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Cliente Gym 1',
                'document' => '9876541',
                'cpf' => '097.196.590-09',
                'created_at' => '2020-05-29 03:37:59',
                'updated_at' => '2020-05-30 16:02:54',
                'deleted_at' => NULL,
                'user_id' => 7,
                'address' => 'Travessa Nova Aurora',
                'number' => '496',
                'postalcode' => '65064-290',
                'state' => 'MA',
                'city' => 'São Luís',
                'register_code' => 2020050006,
                'district' => NULL,
                'status' => 'ativo',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Cliente Gym 5',
                'document' => '33.235.526-3',
                'cpf' => '662.246.184-88',
                'created_at' => '2020-05-30 16:04:10',
                'updated_at' => '2020-05-30 16:04:10',
                'deleted_at' => NULL,
                'user_id' => 7,
                'address' => 'Quadra Dirceu Arcoverde-II',
                'number' => '308',
                'postalcode' => '64078-410',
                'state' => 'PI',
                'city' => 'Teresina',
                'register_code' => 2020050007,
                'district' => 'Itararé',
                'status' => 'ativo',
            ),
        ));
        
        
    }
}
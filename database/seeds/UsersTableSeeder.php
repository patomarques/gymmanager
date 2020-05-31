<?php

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
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/May2020/qerzAYP3oK4fAKpmiNvW.',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hlnvxkmvGYaCkwxdfc78XOcqP4yhvBPAQS0tO3ie5FT9UaTbhK5N.',
                'remember_token' => 'Y7FrcEWNEtv61JeUcnVuIGcNCkTtVNjz7uabDcJYm7PQIyBFDVUpW8rxInV0',
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-04-29 02:02:48',
                'updated_at' => '2020-05-03 19:28:55',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 4,
                'name' => 'Gerente',
                'email' => 'gerencial@ppg.com.br',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$M2sp7H8PTuE3nnCYiAQIUORMNxYli5B3h.GgwZuq.OrV6IOzVXLU6',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-01 13:34:48',
                'updated_at' => '2020-05-01 13:34:48',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 8,
                'name' => 'Recepcionista',
                'email' => 'recepcionista@pedalpowergym.com.br',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2ta8mXUlddJp5NVsmCph7OqIEHIVTjLyRdydxzGwyu4NhvRmwH8ki',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-01 14:07:28',
                'updated_at' => '2020-05-01 20:01:01',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 7,
                'name' => 'Sistema Touchscreen',
                'email' => 'sistema.touchscreen@pedalpowergym.com.br',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5N3ZZ4Y.HnCoHID8w8He7.czEAaE4eNy6kiZJRhmqlKBHgEkCyAzq',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-01 16:47:43',
                'updated_at' => '2020-05-01 20:00:48',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 6,
                'name' => 'Fisioterapeuta',
                'email' => 'fisioterapeuta@pedalpowergym.com.br',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Usijda4HkL1U2JPWmMns0OPLff9sERPWdZ4R2ruzzPhkgQapqA3I6',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-01 16:53:57',
                'updated_at' => '2020-05-01 20:00:40',
            ),
            5 => 
            array (
                'id' => 7,
                'role_id' => 3,
                'name' => 'Usuario 5',
                'email' => 'usuario5@pedalpowergym.site',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Pms47oG2q.rJ6kn3/cZGWeGaeQsSg8zJZZ0tlrYE2VY5KermvXkCK',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-18 04:49:56',
                'updated_at' => '2020-05-29 03:14:58',
            ),
            6 => 
            array (
                'id' => 8,
                'role_id' => 3,
                'name' => 'Usuario 4',
                'email' => 'usuario4@pedalpowergym.site',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EZapCZ0owzddaI2XUDSVyuKi0Ii4kZcDR7R4bmDKvsTLrael9uvsK',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-18 04:50:23',
                'updated_at' => '2020-05-29 03:14:26',
            ),
            7 => 
            array (
                'id' => 9,
                'role_id' => 3,
                'name' => 'Usuario 1',
                'email' => 'cliente1@pedalpowergym.site',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hxPPtmbQ7VP8Y6oat6Urfud6h.yINUZcFWTycoJDpzqKDFqCVPpXO',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-29 03:13:01',
                'updated_at' => '2020-05-29 03:13:01',
            ),
            8 => 
            array (
                'id' => 10,
                'role_id' => 3,
                'name' => 'Usuária 2',
                'email' => 'usuaria2@pedalpowergym.site',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$k809qgJ4AR4CJbtfOGwMguhttvTnDmyTUnQCsvX7rCbcQ.Z.Ltzwm',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-29 03:13:20',
                'updated_at' => '2020-05-29 03:13:20',
            ),
            9 => 
            array (
                'id' => 11,
                'role_id' => 3,
                'name' => 'Usuaria 3',
                'email' => 'usuaria3@pedalpowergym.site',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rxVRjrNTqzaNw/t0LrvNtO2jiMbbXvdmlt32WtdUm5aedqWJguGAC',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-29 03:13:36',
                'updated_at' => '2020-05-29 03:13:36',
            ),
            10 => 
            array (
                'id' => 12,
                'role_id' => 3,
                'name' => 'Usuária 6',
                'email' => 'usuaria6@pedalpowergym.site',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$B9vCGErSfI/DOOjaCgi3gugKjyYyfJEgVsjKdXcUYT29ijBFao63u',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-29 16:54:09',
                'updated_at' => '2020-05-29 16:54:09',
            ),
            11 => 
            array (
                'id' => 13,
                'role_id' => 3,
                'name' => 'Usuario 7',
                'email' => 'usuario7@pedalpowergym.site',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$C1a.OrTySv8s4RUxyCW6y.NQGgMvwKjGUaipLXzKtwnfmPuLrHg3e',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-29 16:54:27',
                'updated_at' => '2020-05-29 16:54:27',
            ),
            12 => 
            array (
                'id' => 14,
                'role_id' => 3,
                'name' => 'Usuario 8',
                'email' => 'usuario8@pedalpowergym.site',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$g0RqWN0TwrBrltqWuWgZ0OXSDNIwBCbOn8oYA5So9zH9h8EboehaS',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-29 16:54:43',
                'updated_at' => '2020-05-29 16:54:43',
            ),
            13 => 
            array (
                'id' => 15,
                'role_id' => 3,
                'name' => 'Usuario 9',
                'email' => 'usuario9@pedalpowergym.site',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UAEhgxJVnJDfntxoctnluOvyvXM3tNpOlCOVSbNgMB783TikP8suC',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt_br"}',
                'created_at' => '2020-05-29 16:54:58',
                'updated_at' => '2020-05-29 16:54:58',
            ),
        ));
        
        
    }
}
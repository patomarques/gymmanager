<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(CustomersHasGroupClassesTableSeeder::class);
        $this->call(GroupClassesTableSeeder::class);
        $this->call(InstructorsTableSeeder::class);
        $this->call(InstructorsHasClassesTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PlansTableSeeder::class);
        $this->call(PhysicalAssessmentsTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
    }
}

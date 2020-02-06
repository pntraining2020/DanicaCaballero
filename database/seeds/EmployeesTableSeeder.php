<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'First_Name' => Str::random(10),
            'Last_Name' => Str::random(10),
            'Email' => Str::random(10).'@gmail.com',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // check if table users is empty
         if (DB::table('users')->count() == 0) {

            DB::table('users')->insert([
                [
                    'id' => 1,
                    'name' => 'mnrsewa admin',
                    'email' => 'admin@mnrsewa.com',
                    'password' => bcrypt('admin#1234'),
                    'phone' => 9810631146,
                    'status' => 'approved',
                    'role_id' => 1
                ],
                [
                    'id' => 2,
                    'name' => 'mnrsewa customer',
                    'email' => 'customer@mnrsewa.com',
                    'password' => bcrypt('customer#1234'),
                    'phone' => 9868715191,
                    'status' => 'approved',
                    'role_id' => 2
                ],
                [
                    'id' => 3,
                    'name' => 'mnrsewa freelancer',
                    'email' => 'freelancer@mnrsewa.com',
                    'password' => bcrypt('freelancer#1234'),
                    'phone' => 9848755083,
                    'status' => 'approved',
                    'role_id' => 3
                ],
                [
                    'id' => 4,
                    'name' => 'mnrsewa company',
                    'email' => 'company@mnrsewa.com',
                    'password' => bcrypt('company#1234'),
                    'phone' => 9868797800,
                    'status' => 'approved',
                    'role_id' => 4
                ],
            ]);
        } else {
            echo "\e[31mTable is not empty, therefore NOT ";
        }
    }
}

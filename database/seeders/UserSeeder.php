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
                    'name' => 'Kishor Bhatt',
                    'email' => 'customer@mnrsewa.com',
                    'password' => bcrypt('customer#1234'),
                    'phone' => 9868715191,
                    'status' => 'approved',
                    'role_id' => 2
                ],
                [
                    'id' => 3,
                    'name' => 'Lalit Nath',
                    'email' => 'lalitnath1999@gmail.com',
                    'password' => bcrypt('Nepal@123'),
                    'phone' => 9848755083,
                    'status' => 'approved',
                    'role_id' => 3
                ],
                [
                    'id' => 4,
                    'name' => 'Sofsee Tech',
                    'email' => 'info@sofsee.com',
                    'password' => bcrypt('company#1234'),
                    'phone' => 9868797800,
                    'status' => 'approved',
                    'role_id' => 4
                ],
                [
                    'id' => 5,
                    'name' => 'Sarswati Bam',
                    'email' => 'freelancer1@mnrsewa.com',
                    'password' => bcrypt('freelancer#1234'),
                    'phone' => 9848132447,
                    'status' => 'approved',
                    'role_id' => 3
                ],
                [
                    'id' => 6,
                    'name' => 'Deependra Pal',
                    'email' => 'freelancer2@mnrsewa.com',
                    'password' => bcrypt('freelancer#1234'),
                    'phone' => 98487164946,
                    'status' => 'approved',
                    'role_id' => 3
                ],
                [
                    'id' => 7,
                    'name' => 'Niraj Pal',
                    'email' => 'contact@nirajpal.com.np',
                    'password' => bcrypt('freelancer#1234'),
                    'phone' => 9848759464,
                    'status' => 'approved',
                    'role_id' => 3
                ],

            ]);
        } else {
            echo "\e[31mTable is not empty, therefore NOT ";
        }
    }
}

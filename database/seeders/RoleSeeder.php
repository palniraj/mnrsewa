<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table roles is empty
        if (DB::table('roles')->count() == 0) {

            DB::table('roles')->insert([
                [
                    'id' => 1,
                    'type' => 'admin',
                ],
                [
                    'id' => 2,
                    'type' => 'customer',
                ],
                [
                    'id' => 3,
                    'type' => 'freelancer',
                ],
                [
                    'id' => 4,
                    'type' => 'company',
                ],
            ]);
        } else {
            echo "\e[31mTable is not empty, therefore NOT ";
        }
    }
}

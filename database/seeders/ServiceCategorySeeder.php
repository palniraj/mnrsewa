<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('service_categories')->count() == 0) {

            DB::table('service_categories')->insert([
                [
                    'id' => 1,
                    'name' => 'Ghar ko Kaam',
                    'parent_id' => null,
                    'is_featured' => 'on',
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 2,
                    'name' => 'Health',
                    'parent_id' => null,
                    'is_featured' => 'on',
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 3,
                    'name' => 'IT',
                    'parent_id' => null,
                    'is_featured' => 'on',
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 4,
                    'name' => 'Audio and Video',
                    'parent_id' => null,
                    'is_featured' => 'on',
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 5,
                    'name' => 'Training',
                    'parent_id' => null,
                    'is_featured' => 'on',
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 6,
                    'name' => 'Repair and Installation',
                    'parent_id' => null,
                    'is_featured' => 'on',
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 7,
                    'name' => 'Dharmic Kaam',
                    'parent_id' => null,
                    'is_featured' => 'on',
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 8,
                    'name' => 'Education',
                    'parent_id' => null,
                    'is_featured' => 'on',
                    'status' => 'active',
                    'created_at' => now(),
                ],

                [
                    'id' => 9,
                    'name' => 'Electrician',
                    'parent_id' => '1',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 10,
                    'name' => 'Plumber',
                    'parent_id' => '1',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 11,
                    'name' => 'Carpenter',
                    'parent_id' => '1',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 12,
                    'name' => 'Welding',
                    'parent_id' => '1',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 13,
                    'name' => 'Maid Service',
                    'parent_id' => '1',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 14,
                    'name' => 'Nurse',
                    'parent_id' => '2',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 15,
                    'name' => 'Covid-19',
                    'parent_id' => '2',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 16,
                    'parent_id' => '2',
                    'name' => 'Ambulance',
                   'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 17,
                    'name' => 'Old Age care',
                    'parent_id' => '2',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 18,
                    'name' => 'Doctor',
                    'parent_id' => '2',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 19,
                    'name' => 'Website Development',
                    'parent_id' => '3',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 20,
                    'name' => 'Programmer',
                    'parent_id' => '3',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 21,
                    'name' => 'Web Hosting',
                    'parent_id' => '3',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 22,
                    'name' => 'Digital Marketing',
                    'parent_id' => '3',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
                [
                    'id' => 23,
                    'name' => 'App Developer',
                    'parent_id' => '3',
                    'is_featured' => null,
                    'status' => 'active',
                    'created_at' => now(),
                ],
              
            
            ]);
        } else {
            echo "\e[31mTable is not empty, therefore NOT ";
        }
    }
}

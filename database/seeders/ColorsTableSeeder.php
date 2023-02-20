<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('colors')->delete();

        \DB::table('colors')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'صورتی',
                'code' => '#f221ba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'مشکی',
                'code' => '#1f1e1f',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'سفید',
                'code' => '#f5f5f5',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'آبی',
                'code' => '#351ee6',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'قرمز',
                'code' => '#e61e1e',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}

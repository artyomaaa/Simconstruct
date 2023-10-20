<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(array(
//            array(
//                'project_name' => 'All',
//
//            ),
            array(
                'project_name' => 'ARCHITECTURE',

            ),
            array(
                'project_name' => 'Building',

            ),
            array(
                'project_name' => 'CONSTRUCTION',

            ),
            array(
                'project_name' => 'DESIGN',

            ),
            array(
                'project_name' => 'Painting',

            ),
        ));
    }
}

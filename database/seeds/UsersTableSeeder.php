<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Simon',
            'role'=>'Admin',
            'email' => 'sim.sargsyan94@gmail.com',
            'password' => bcrypt('622133367sim'),
            'created_at'=>Carbon\Carbon::now(),
            'updated_at'=>Carbon\Carbon::now(),

        ]);
    }
}

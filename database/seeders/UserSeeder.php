<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
            [
                'name' => 'Oussama',
                'email' => 'admin@gmail.com',
                'role_id' => 1,
                'password' => Hash::make('uncharted') ,
            ],
            [
                'name' => 'Zimdaane',
                'email' => 'membre@gmail.com',
                'role_id' => 2,
                'password' => Hash::make('uncharted') ,
            ],
        ]);
    }
}

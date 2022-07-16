<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name'=>'mgmg',
        //     'email'=>'mgmg@gmail.com',
        //     'password'=>Hash::make('123456')
        // ]);

        $faker=Faker::create();

        for($i=0;$i<100;$i++){
            DB::table('users')->insert([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>Hash::make('password')
            ]);
        }
    }
}

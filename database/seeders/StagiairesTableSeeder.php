<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class StagiairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
    
        for ($i = 0; $i < 10; $i++) {
            DB::table('stagiaires')->insert([
                'cef'=> $faker->unique()-> numberBetween(0, 90000000),
                'first_name'=> $faker->firstName(),
                'last_name'=> $faker->lastName(),
                'address' => $faker-> address()  ,
                'phone'=> $faker-> phoneNumber() ,
                'gender'=> 'Male' ,
                'email' => $faker->unique()->email,                
                'filiere' => 'DEV',
                'classe' => '201' ,
                'birthday' => $faker-> date() ,
                'birthPlace'=> $faker-> city() ,
                'uemail' => $faker->unique()->email(),               
                'upassword'=> $faker-> password(2, 6) ,
                
                // Add other columns and Faker methods as needed
            ]);
        }
    }
    
}

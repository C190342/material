<?php

namespace Database\Seeders;

use App\Models\Admin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        Admin::create([
            'email'         =>  'admin@example.com',
            'password'      =>  bcrypt('123456'), 
            'first_name'    =>  $faker->firstName,
            'last_name'     =>  $faker->lastName,
            'phone'         =>  $faker->numerify('080-###-####'),
            'address'       =>  $faker->address,
            'city'          =>  $faker->city,
            'country'       =>  $faker->country,
            'description'   =>  $faker->text(),
        ]);
    }
}

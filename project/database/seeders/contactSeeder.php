<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\contact;
use Faker\Factory as Faker;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
		for($i=1; $i<=100; $i++)
		{
			$data=new contact;
			$data->name=$faker->name;
			$data->email=$faker->email;
			$data->subject="hello";
			$data->message="hii good service";
			$data->save();
		}
    }
}

<?php

use Illuminate\Database\Seeder;

class PromotersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 15;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('promoters')->insert([ //,
                'user_id' => 1,
                'artist_id' => 1,
                'promoter_name' => $faker->firstName . ' ' . $faker->lastName,
                'promoter_email' => $faker->unique()->email,
                'promoter_phone' => $faker->phoneNumber,
                'promoter_phone_alt' => $faker->phoneNumber,
                'promoter_addr' => $faker->streetAddress,
                'promoter_city' => $faker->city,
                'promoter_state' => $faker->stateAbbr,
                'promoter_zip' => $faker->postcode,
                'promoter_notes' => $faker->text
            ]);
        }
    }
}

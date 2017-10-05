<?php

use Illuminate\Database\Seeder;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Let's truncate our existing records to start from scratch.
        Issue::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Issue::create([
                'uname' => $faker->sentence,
                'fname' => $faker->sentence,
                'emailaddress' => $faker->sentence,
                'os' => $faker->sentence,
                'complaint' => $faker->sentence,
                'comment' => $faker->sentence,
            ]);
        }
    }
}

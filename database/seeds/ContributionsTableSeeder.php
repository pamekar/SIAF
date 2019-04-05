<?php

use Illuminate\Database\Seeder;
use App\Contribution;

class ContributionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // drg >> get random users
        $users = \App\User::inRandomOrder()->limit(187)->pluck('id');

        $n = 2152;
        // drg >> Create $n numbers of contributions

        foreach (range(1, $n) as $index) {
            $user = $faker->randomElement($users);
            Contribution::create([
                'user_id' => $user,
                'reference_id' => md5($user * $index),
                'note' => $faker->realText(),
                'amount' => mt_rand(1, 500) * 100000,
                'gateway' => $faker->randomElement([
                    'paystack',
                    'rave',
                    'payu',
                    'voguepay',
                    'mypaga'
                ]),
                'status' => 'successful'
            ]);
        }

    }
}

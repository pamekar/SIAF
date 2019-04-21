<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $role = Role::where('name', 'user')->firstOrFail();

        User::create([
            'name'              => 'Admin',
            'email'             => 'admin@admin.com',
            'phone_no'          => '0806',
            'password'          => bcrypt('password'),
            'remember_token'    => Str::random(60),
            'role_id'           => 1,
            'email_verified_at' => date('Y-m-d')
        ]);

        $n = 451;
        // drg >> Create $n numbers of users

        foreach (range(1, $n) as $index) {
            $userName = $faker->userName;
            User::create([
                'name'              => $faker->unique()->userName,
                'first_name'        => $faker->firstName,
                'last_name'         => $faker->lastName,
                'email'             => $faker->unique()->email,
                'twitter'           => $userName,
                'facebook'          => $userName,
                'instagram'         => $userName,
                'linkedin'          => $userName,
                'phone_no'          => $faker->phoneNumber,
                'about'             => $faker->realText(),
                'password'          => bcrypt('password'),
                'remember_token'    => Str::random(60),
                'role_id'           => $role->id,
                'email_verified_at' => date('Y-m-d')
            ]);
        }
    }
}

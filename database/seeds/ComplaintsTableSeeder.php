<?php

use Illuminate\Database\Seeder;

class ComplaintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // drg >> list of states
        $states = [
            'Abia ',
            'Adamawa ',
            'Akwa Ibom ',
            'Anambra ',
            'Bauchi ',
            'Bayelsa ',
            'Benue ',
            'Borno ',
            'Cross River ',
            'Delta ',
            'Ebonyi ',
            'Edo ',
            'Ekiti ',
            'Enugu ',
            'Gombe ',
            'Imo ',
            'Jigawa ',
            'Kaduna ',
            'Kano ',
            'Katsina ',
            'Kebbi ',
            'Kogi ',
            'Kwara ',
            'Lagos ',
            'Nasarawa ',
            'Niger ',
            'Ogun ',
            'Ondo ',
            'Osun ',
            'Oyo ',
            'Plateau ',
            'Rivers ',
            'Sokoto ',
            'Taraba ',
            'Yobe ',
            'Zamfara  ',
            'FCT '
        ];

        // drg >> array of tags
        $tags = [
            'police',
            'army',
            'university',
            'immigrations',
            'airport',
            'transportation',
            'crime',
            'extortion',
            'rape',
            'harrassment',
            'abuse of power',
            'illegal detention',
            'bribery',
            'domestic violence',
            'child abuse',
            'human Traficking'
        ];

        // drg >> array of complaint types
        $types = [
            'Extortion',
            'Rape',
            'Harrassment',
            'Abuse Of Power',
            'Illegal Detention',
            'Bribery',
            'Domestic Violence',
            'Child Abuse',
            'Human Traficking'
        ];

        // drg >> get array of random users
        $users = \App\User::inRandomOrder()->limit(347)->pluck('id');
        $admin = \App\User::where('role_id', 1)->value('id');

        $n = 4127;
        // drg >> Create $n numbers of contributions

        foreach (range(1, $n) as $index) {
            $user = $faker->randomElement($users);
            $status = $index % 2 === 0 ? 'resolved'
                : ($index % 3 === 0 ? 'closed' : 'pending');
            $complaint = \App\Complaint::create([
                'user_id'      => $user,
                'reference_id' => \Illuminate\Support\Str::random(6) . $index,
                'title'        => $faker->realText(60),
                'description'  => $faker->paragraph(20),
                'type'         => $faker->randomElement($types),
                'state'        => $faker->randomElement($states),
                'location'     => $faker->address,
                'tags'         => $faker->randomElement($tags),
                'status'       => $status,
                'occurred_at'  => $faker->dateTimeBetween('-5 years', 'now')
            ]);
            foreach (range(1, 2) as $index) {
                \App\Remark::create([
                    'user_id'      => $admin,
                    'complaint_id' => $complaint->id,
                    'description'  => $faker->realText()
                ]);
            }
        }
    }
}

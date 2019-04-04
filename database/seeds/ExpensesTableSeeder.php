<?php

use Illuminate\Database\Seeder;

class ExpensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        // drg >> get sum of contributions and sum of expected expenses
        $contributions = \App\Contribution::sum('amount');
        $totalExpenses = $contributions * 0.85;
        $sumOfExpenses = 0;
        $complaints = \App\Complaint::all();
        $averageExpense = $totalExpenses / $complaints->count() * 0.75;
        $user = \App\User::where('role_id', 1)->value('id');
        foreach ($complaints as $complaint) {
            if ($sumOfExpenses < $totalExpenses) {
                $amount = $complaint->status === 'closed'
                    ? $averageExpense - mt_rand(1, 1000) * 10000 * mt_rand(3,
                        6)
                    : ($faker->boolean()
                        ? $averageExpense + mt_rand(1, 1000)
                        * 10000 * mt_rand(1, 3)
                        : $averageExpense - mt_rand(1, 1000) * 10000
                        * mt_rand(1,
                            3));
                $amount = $amount > 0 ? $amount : 0;
                \App\Expense::create([
                    'user_id'      => $user,
                    'complaint_id' => $complaint->id,
                    'title'        => $faker->realText('70'),
                    'detail'       => $faker->paragraph(20) . "<br>"
                        . $faker->paragraph(30) . "<br>"
                        . $faker->paragraph(20),
                    'amount'       => $amount
                ]);
                $sumOfExpenses += $amount;
            } else {
                break;
            }
        }
    }
}

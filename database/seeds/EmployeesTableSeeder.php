<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::unguard();
        $this->data()->each(function($data) {
            Employee::create($data);
        });
        Employee::reguard();
    }

    /**
     * Supply data for seeding
     *
     * @return collection
     */
    private function data() {
        return collect([
            ['name' => 'Sihab', 'salary' => '13000', 'joining_date' => '2017-05-01'],
            ['name' => 'Sujon', 'salary' => '15000', 'joining_date' => '2017-06-01'],
            ['name' => 'Shuvo', 'salary' => '16000', 'joining_date' => '2017-06-01'],
            ['name' => 'Kader', 'salary' => '20000', 'joining_date' => '2017-07-01'],
            ['name' => 'Saiful', 'salary' => '20000', 'joining_date' => '2017-08-01'],
            ['name' => 'Aurin', 'salary' => '13000', 'joining_date' => '2018-05-01'],
            ['name' => 'Prince', 'salary' => '15000', 'joining_date' => '2018-05-01'],
            ['name' => 'Pappu', 'salary' => '16000', 'joining_date' => '2018-05-01'],
            ['name' => 'Rahman', 'salary' => '20000', 'joining_date' => '2018-05-01'],
            ['name' => 'Adnan', 'salary' => '20000', 'joining_date' => '2018-05-01'],
        ]);
    }
}

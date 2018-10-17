<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
        $this->data()->each(function($data) {
            User::create($data);
        });
        User::reguard();
    }

    /**
     * Supply data for seeding
     *
     * @return collection
     */
    private function data() {
        return collect([
            ['name' => 'Sihab', 'email' => 'sihab.babl@gmail.com', 'password' => '123456'],
            ['name' => 'UserAdmin', 'email' => 'admin@admin.com', 'password' => '123456'],
        ]);
    }
}

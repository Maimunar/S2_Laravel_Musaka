<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'vanko',
            'password' => hash('sha256','vanko'),
            'role' => 'admin',
            'email' => 'vankoe_23@mail.bg',
            'full_name' => 'Ivan Ivanov',
            'job' => 'Software Engineer',
            'workplace' => 'Fontys',
            'image' => 'placeholder.png'
        ]);
        DB::table('users')->insert([
            'username' => 'grigor',
            'password' => hash('sha256','ge6ata'),
            'role' => 'user',
            'email' => 'Lord_sashko@abv.bg',
            'full_name' => 'Georgi Ivanov',
            'job' => 'Teacher',
            'workplace' => 'Fontys',
            'image' => 'placeholder.png'
        ]);

    }
}

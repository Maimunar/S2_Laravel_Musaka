<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $currentTime = Carbon::now();
        DB::table('reviews')->insert([
            'sender' => 'ivan',
            'comment' => 'great site',
            'created_at' => $currentTime,
            'updated_at' => $currentTime
        ]);
        DB::table('reviews')->insert([
            'sender' => 'ivan',
            'comment' => 'I think that your website needs some improvements',
            'created_at' => $currentTime,
            'updated_at' => $currentTime
        ]);
        DB::table('reviews')->insert([
            'sender' => 'pecata3',
            'comment' => 'Your site is very helpful',
            'created_at' => $currentTime,
            'updated_at' => $currentTime
        ]);
        DB::table('reviews')->insert([
            'sender' => 'pecata3',
            'comment' => 'Nice!',
            'created_at' => $currentTime,
            'updated_at' => $currentTime
        ]);
        DB::table('reviews')->insert([
            'sender' => 'pecata3',
            'comment' => 'Terrible!',
            'created_at' => $currentTime,
            'updated_at' => $currentTime
        ]);
        DB::table('reviews')->insert([
            'sender' => 'vanko',
            'comment' => 'Its okay',
            'created_at' => $currentTime,
            'updated_at' => $currentTime
        ]);
    }
}

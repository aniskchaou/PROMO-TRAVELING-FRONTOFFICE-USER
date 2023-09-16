<?php

use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('subscribers')->delete();
        DB::table('subscribers')->insert(['name' => 'John Doe']);
    }
}

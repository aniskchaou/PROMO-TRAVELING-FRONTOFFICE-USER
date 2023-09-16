<?php

use Illuminate\Database\Seeder;

class TravelBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('bookings')->delete();
        DB::table('bookings')->insert(['package' => 'Onion','traveller'=>'4','date'=>'',
        'payment'=>'Active','status'=>'Active','cost'=>'Active','adult'=>'Active',
        'child'=>'Active','hotel'=>'Active']);
    }
}

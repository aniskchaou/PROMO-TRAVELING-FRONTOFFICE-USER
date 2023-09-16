<?php

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('hotels')->delete();
        DB::table('hotels')->insert(['name' => 'Ibis']);
    }
     
}

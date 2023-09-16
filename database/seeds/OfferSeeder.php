<?php

use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->delete();
        DB::table('offers')->insert(['name' => 'Discount','start'=>'4/10/2022','end'=>'4/22/2022','image'=>'https://picsum.photos/200']);
    }
}

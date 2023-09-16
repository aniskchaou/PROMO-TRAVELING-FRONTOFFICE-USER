<?php

use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('destinations')->delete();
        DB::table('destinations')->insert(['name' => 'Paris','image'=>'https://picsum.photos/200','description'=>'','weather'=>'Sunny','hotel'=>'Ibis','transportation'=>'Bus']);
      
    }
}

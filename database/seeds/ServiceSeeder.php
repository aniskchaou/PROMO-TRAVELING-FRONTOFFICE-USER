<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('services')->delete();
        DB::table('services')->insert(['title' => 'Travel','image'=>'https://picsum.photos/200','text'=>'Active']);
       
    }

}

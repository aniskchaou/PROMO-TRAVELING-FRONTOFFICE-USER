<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('silders')->delete();
        DB::table('sliders')->insert(['title' => 'Onion','image'=>'4','description'=>'','text'=>'Active']);
    }
}

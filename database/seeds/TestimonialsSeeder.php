<?php

use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('testimonials')->delete();
        DB::table('testimonials')->insert(['name' => 'John Doe','review'=>'4']); 
    }

}

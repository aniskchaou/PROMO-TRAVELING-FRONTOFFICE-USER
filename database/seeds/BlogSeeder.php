<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('blogs')->delete();
        DB::table('blogs')->insert(['title' => 'Onion','body'=>'4','image'=>'']);
    }

}

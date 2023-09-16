<?php

use Illuminate\Database\Seeder;

class TravellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('travellers')->delete();
        DB::table('travellers')->insert(['name' => 'John Doe','telephone'=>'0908765456','country'=>'England','status'=>'Active'
        ,'city'=>'London','address'=>'32 th Street 87999','status'=>'Active','email'=>'john@email.com']);
    }
}

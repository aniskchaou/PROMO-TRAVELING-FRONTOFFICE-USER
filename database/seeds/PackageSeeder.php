<?php

use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->delete();
        DB::table('packages')->insert(['name' => 'Summer','location'=>'Paris','description'=>'',
        'start'=>'12/10/2022','end'=>'14/10/2022','price'=>'1000','image'=>'https://picsum.photos/200','video'=>'1000']);

    }
}

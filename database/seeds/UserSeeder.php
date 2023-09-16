<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->delete();
    User::create(array(
        'name'     => 'admin',
        'email'    => 'admin@admin.io',
        'password' => Hash::make('admin')
    ));
    }
}

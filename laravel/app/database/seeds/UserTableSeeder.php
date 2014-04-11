<?php
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'username' => 'firstuser',
            'password' => Hash::make('pass')
        ));
 
        User::create(array(
            'username' => 'seconduser',
            'password' => Hash::make('second_password')
        ));
    }
 
}
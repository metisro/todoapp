<?php

class UsersTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->delete();
        
        $users = array(
            array(
            'name' => 'Flavius',
            'password' => Hash::make('testpass'),
            'email' => 'flavius.gheorghe@gmail.com'
        )
    );
        
        DB::table('users')->insert($users);
    }
}
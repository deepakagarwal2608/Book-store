<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
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
                    'id' =>'1',
                    'Image' => 'public/user.jpg',
                    'contact'=>'7347454574',
                    'email' => 'deepakagarwal2608@gmail.com',
                    'password' => Hash::make('123456'),
                    'name' => 'Deepak Agarwal',
                    'admin'=>0
                ));
        User::create(array(
                  'id' =>'2',
                  'Image' => 'public/admin.jpg',
                  'contact' => '9914884017',
                  'email' => 'deepakagarwal2608@admin.com',
                  'password' => Hash::make('@Admin1234'),
                  'name' => 'Deepak Agarwal',
                  'admin'=>1
              ));
    }
}

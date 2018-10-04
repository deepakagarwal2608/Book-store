<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->delete();

        Order::create(array(
                    'id' =>'1',
                    'user_id'=>'1',
                    'name' => 'Sid',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'722',
                    'status'=>'0',
                    'transactions_id'=>'1',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-08-01 12:14:55',
                    'updated_at'=>'2018-08-01 12:14:55'
                ));
        Order::create(array(
                    'id' =>'2',
                    'user_id'=>'1',
                    'name' => 'Deepak',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'95',
                    'status'=>'1',
                    'transactions_id'=>'2',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-08-06 12:14:55',
                    'updated_at'=>'2018-08-06 12:14:55'
                ));
        Order::create(array(
                    'id' =>'3',
                    'user_id'=>'1',
                    'name' => 'Rohit',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'350',
                    'status'=>'0',
                    'transactions_id'=>'3',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-08-11 12:14:55',
                    'updated_at'=>'2018-08-11 12:14:55'
                ));
        Order::create(array(
                    'id' =>'4',
                    'user_id'=>'1',
                    'name' => 'Pankaj',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'694',
                    'status'=>'0',
                    'transactions_id'=>'4',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-08-16 12:14:55',
                    'updated_at'=>'2018-08-16 12:14:55'
                ));
        Order::create(array(
                    'id' =>'5',
                    'user_id'=>'1',
                    'name' => 'Ved',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'341',
                    'status'=>'1',
                    'transactions_id'=>'5',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-08-21 12:14:55',
                    'updated_at'=>'2018-08-21 12:14:55'
                ));
        Order::create(array(
                    'id' =>'6',
                    'user_id'=>'1',
                    'name' => 'Amar',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'210',
                    'status'=>'0',
                    'transactions_id'=>'6',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-08-26 12:14:55',
                    'updated_at'=>'2018-08-26 12:14:55'
                ));
        Order::create(array(
                    'id' =>'7',
                    'user_id'=>'1',
                    'name' => 'Shridhar',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'288',
                    'status'=>'1',
                    'transactions_id'=>'7',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-09-02 12:14:55',
                    'updated_at'=>'2018-09-02 12:14:55'
                ));
        Order::create(array(
                    'id' =>'8',
                    'user_id'=>'1',
                    'name' => 'Lucky',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'359',
                    'status'=>'0',
                    'transactions_id'=>'8',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-09-07 12:14:55',
                    'updated_at'=>'2018-09-07 12:14:55'
                ));
        Order::create(array(
                    'id' =>'9',
                    'user_id'=>'1',
                    'name' => 'Ujjawal',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'298',
                    'status'=>'1',
                    'transactions_id'=>'9',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-09-13 12:14:55',
                    'updated_at'=>'2018-09-13 12:14:55'
                ));
        Order::create(array(
                    'id' =>'10',
                    'user_id'=>'1',
                    'name' => 'Lalit',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'271',
                    'status'=>'0',
                    'transactions_id'=>'10',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-09-14 12:14:55',
                    'updated_at'=>'2018-09-14 12:14:55'
                ));
        Order::create(array(
                    'id' =>'11',
                    'user_id'=>'1',
                    'name' => 'Manjit',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'802',
                    'status'=>'0',
                    'transactions_id'=>'11',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-09-15 12:14:55',
                    'updated_at'=>'2018-09-15 12:14:55'
                ));
        Order::create(array(
                    'id' =>'12',
                    'user_id'=>'1',
                    'name' => 'Somesh',
                    'email'=>'deepakagarwal2608@gmail.com',
                    'contact_number'=>'9914884017',
                    'state'=>'Rajasthan',
                    'city'=>'Bhadra',
                    'zip'=>'335501',
                    'address'=>'ward no. 23',
                    'total'=>'543',
                    'status'=>'0',
                    'transactions_id'=>'12',
                    'transactions_status'=>'succeeded',
                    'created_at'=>'2018-09-18 12:14:55',
                    'updated_at'=>'2018-09-18 12:14:55'
                ));
    }
}

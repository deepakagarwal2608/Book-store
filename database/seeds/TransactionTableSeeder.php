<?php

use Illuminate\Database\Seeder;
use App\Transaction;
class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->delete();

        Transaction::create(array(
                    'id' =>'1',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-08-01 12:14:55',
                    'updated_at'=>'2018-08-01 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'2',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-08-06 12:14:55',
                    'updated_at'=>'2018-08-06 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'3',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-08-11 12:14:55',
                    'updated_at'=>'2018-08-11 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'4',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-08-16 12:14:55',
                    'updated_at'=>'2018-08-16 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'5',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-08-21 12:14:55',
                    'updated_at'=>'2018-08-21 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'6',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-08-26 12:14:55',
                    'updated_at'=>'2018-08-26 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'7',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-09-02 12:14:55',
                    'updated_at'=>'2018-09-02 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'8',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-09-07 12:14:55',
                    'updated_at'=>'2018-09-07 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'9',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-09-13 12:14:55',
                    'updated_at'=>'2018-09-13 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'10',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-09-14 12:14:55',
                    'updated_at'=>'2018-09-14 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'11',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-09-15 12:14:55',
                    'updated_at'=>'2018-09-15 12:14:55'
                ));
        Transaction::create(array(
                    'id' =>'12',
                    'user_id'=>'1',
                    'status'=>'succeeded',
                    'message'=>'Payment complete.',
                    'created_at'=>'2018-09-18 12:14:55',
                    'updated_at'=>'2018-09-18 12:14:55'
                ));


    }
}

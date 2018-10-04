<?php

use Illuminate\Database\Seeder;

class OrderBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_order')->delete();

        DB::table('book_order')->insert(array(
            'id' =>'1',
            'order_id'=>'1',
            'book_id'=>'1',
            'amount'=>'1',
            'price'=>'895',
            'total'=>'722',
            'created_at'=>'2018-08-01 12:14:55',
            'updated_at'=>'2018-08-01 12:14:55'
        ));
        DB::table('book_order')->insert(array(
                    'id' =>'2',
                    'order_id'=>'2',
            		'book_id'=>'2',
                    'amount'=>'1',
                    'price'=>'95',
                    'total'=>'95',
                    'created_at'=>'2018-08-06 12:14:55',
                    'updated_at'=>'2018-08-06 12:14:55'
                ));
        DB::table('book_order')->insert(array(
                    'id' =>'3',
                    'order_id'=>'3',
                    'book_id'=>'3',
                    'amount'=>'1',
                    'price'=>'499',
                    'total'=>'350',
                    'created_at'=>'2018-08-11 12:14:55',
                    'updated_at'=>'2018-08-11 12:14:55'
                ));
        DB::table('book_order')->insert(array(
                    'id' =>'4',
                    'order_id'=>'4',
                    'book_id'=>'4',
                    'amount'=>'1',
                    'price'=>'795',
                    'total'=>'694',
                    'created_at'=>'2018-08-16 12:14:55',
                    'updated_at'=>'2018-08-16 12:14:55'
                ));
        DB::table('book_order')->insert(array(
                    'id' =>'5',
                    'order_id'=>'5',
                    'book_id'=>'5',
                    'amount'=>'1',
                    'price'=>'450',
                    'total'=>'341',
                    'created_at'=>'2018-08-21 12:14:55',
                    'updated_at'=>'2018-08-21 12:14:55'
                ));
        DB::table('book_order')->insert(array(
                    'id' =>'6',
                    'order_id'=>'6',
                    'book_id'=>'6',
                    'amount'=>'1',
                    'price'=>'295',
                    'total'=>'210',
                    'created_at'=>'2018-08-26 12:14:55',
                    'updated_at'=>'2018-08-26 12:14:55'
                ));
        DB::table('book_order')->insert(array(
                    'id' =>'7',
                    'order_id'=>'7',
                    'book_id'=>'7',
                    'amount'=>'1',
                    'price'=>'599',
                    'total'=>'288',
                    'created_at'=>'2018-09-02 12:14:55',
                    'updated_at'=>'2018-09-02 12:14:55'
                ));
        DB::table('book_order')->insert(array(
                    'id' =>'8',
                    'order_id'=>'8',
                    'book_id'=>'8',
                    'amount'=>'1',
                    'price'=>'399',
                    'total'=>'359',
                    'created_at'=>'2018-09-07 12:14:55',
                    'updated_at'=>'2018-09-07 12:14:55'
                ));
        DB::table('book_order')->insert(array(
                    'id' =>'9',
                    'order_id'=>'9',
                    'book_id'=>'9',
                    'amount'=>'1',
                    'price'=>'375',
                    'total'=>'298',
                    'created_at'=>'2018-09-13 12:14:55',
                    'updated_at'=>'2018-09-13 12:14:55'
                ));
        DB::table('book_order')->insert(array(
                    'id' =>'10',
                    'order_id'=>'10',
                    'book_id'=>'10',
                    'amount'=>'1',
                    'price'=>'395',
                    'total'=>'271',
                    'created_at'=>'2018-09-14 12:14:55',
                    'updated_at'=>'2018-09-14 12:14:55'
                ));
        DB::table('book_order')->insert(array(
                    'id' =>'11',
                    'order_id'=>'11',
                    'book_id'=>'11',
                    'amount'=>'1',
                    'price'=>'975',
                    'total'=>'802',
                    'created_at'=>'2018-09-15 12:14:55',
                    'updated_at'=>'2018-09-15 12:14:55'
                ));
        DB::table('book_order')->insert(array(
                    'id' =>'12',
                    'order_id'=>'12',
                    'book_id'=>'12',
                    'price'=>'725',
                    'amount'=>'1',
                    'total'=>'543',
                    'created_at'=>'2018-09-18 12:14:55',
                    'updated_at'=>'2018-09-18 12:14:55'
                ));
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        Category::create(array(
                    'id' =>'1',
                    'name' => 'Fiction'
                ));
        Category::create(array(
                    'id' =>'2',
                    'name' => 'Non-Fiction'
                ));
        Category::create(array(
                    'id' =>'3',
                    'name' => 'Competitive Exams'
                ));
        Category::create(array(
                    'id' =>'4',
                    'name' => 'School'
                ));
        Category::create(array(
                    'id' =>'5',
                    'name' => 'Engineering'
                ));
        Category::create(array(
                    'id' =>'6',
                    'name' => 'Medical'
                ));
        Category::create(array(
                    'id' =>'7',
                    'name' => 'Philosophy'
                ));
    }
}

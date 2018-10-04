<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->command->info('Users table seeded!');
        $this->call(CategoriesTableSeeder::class);
        $this->command->info('Category table seeded!');
        $this->call(BooksTableSeeder::class);
        $this->command->info('Books table seeded!');
        $this->call(TransactionTableSeeder::class);
        $this->command->info('Transaction table seeded!');
        $this->call(OrdersTableSeeder::class);
        $this->command->info('Orders table seeded!');
        $this->call(OrderBooksTableSeeder::class);
        $this->command->info('OrderBooks table seeded!');
        
    }
}

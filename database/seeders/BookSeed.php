<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([
            [
         'title'=>'Book 1',
         'year'=>2000,
         'number_of_pages'=>200,
        ],[
         'title'=>'Book 2',
         'year'=>2500,
         'number_of_pages'=>300,
        ],[
         'title'=>'Book 3',
         'year'=>2005,
         'number_of_pages'=>100,
        ],[
         'title'=>'Book 5',
         'year'=>2065,
         'number_of_pages'=>150,
        ]
        ]);
    }
}

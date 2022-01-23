<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::insert([
            [
                'name'=>'ahmed',
                'age'=>55
            ],
            [
                'name'=>'khaled',
                'age'=>40
            ], [
                'name'=>'ali',
                'age'=>32
            ], [
                'name'=>'alia',
                'age'=>27
            ],
        ]);
    }
}

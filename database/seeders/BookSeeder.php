<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = Book::insert([
            [
                'title'    => 'WE THE FUTURE',
                'author'   => 'Cliff Lewis',
                'description' => 'We the future',
                'price' => '300',
                'image' => null,
                'stock' => 1,
            ],
            [
                'title'    =>'THE GREAT INDIAN GIRL',
                'author'   => 'Shashi Tharoor',
                'description' => 'The grat indian girl',
                'price' => '350',
                'image' => null,
                'stock' => 0,
            ],
            [
                'title'    =>'ONE INDIAN GIRL',
                'author'   => 'Chetan Bagat',
                'description' => 'One indian girl',
                'price' => '350',
                'image' => null,
                'stock' => 1,
            ],
            [
                'title'    =>'WORLD FAMOUS ADVEN STOTURE STORIES',
                'author'   => 'Darely Dwiler',
                'description' => 'World famous adventure stories',
                'price' => '360',
                'image' => null,
                'stock' => 1,
            ],
            [
                'title'    =>'THE FUTURE',
                'author'   => 'Darely Dwiler',
                'description' => 'The future',
                'price' => '240',
                'image' => null,
                'stock' => 0,
            ],
            [
                'title'    =>'MY BOOK',
                'author'   => 'Darely Sas',
                'description' => 'My Book',
                'price' => '240',
                'image' => null,
                'stock' => 1,
            ],
            [
                'title'    =>'THE GREAT INDIAN NOVEL',
                'author'   => 'Shashi Tharoor',
                'description' => 'The great indian novel',
                'price' => '300',
                'image' => null,
                'stock' => 1,
            ]
        ]);
    }
}

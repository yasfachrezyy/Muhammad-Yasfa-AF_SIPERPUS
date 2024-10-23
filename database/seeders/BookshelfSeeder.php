<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert([
            'code' => 'B501',
            'name' => 'Novel'
        ]);
        Book::create([
            'title'         => "Burung Puyuh Burung Kutut",
            'author'         => "Godman",
            'year'         => "2009",
            'publisher'         => "Steven",
            'city'         => "Amsterdam",
            'cover'         => "placeholder.com/512px.png",
            'bookshelf_id'         => "1",
        ]);
    }
}

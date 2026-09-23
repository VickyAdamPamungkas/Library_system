<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; // Wajib memanggil Model Book agar sistem mengenali entitasnya

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Madilog (Materialisme, Dialektika, Logika)',
                'author' => 'Tan Malaka',
                'year' => 1943,
                'stock' => 10
            ],
            [
                'title' => 'Kekerasan Budaya Pasca 1965',
                'author' => 'Wijaya Herlambang',
                'year' => 2013,
                'stock' => 15
            ],
            [
                'title' => 'Orang-Orang di Persimpangan Kiri Jalan',
                'author' => 'Soe Hok Gie',
                'year' => 1997,
                'stock' => 8
            ],
            [
                'title' => 'Tetralogi Buru (Bumi Manusia, dkk)',
                'author' => 'Pramoedya Ananta Toer',
                'year' => 1980,
                'stock' => 20
            ],
            [
                'title' => 'Massa Aksi',
                'author' => 'Tan Malaka',
                'year' => 1926,
                'stock' => 12
            ]
        ];

        // Mengeksekusi injeksi data ke database melalui iterasi Eloquent
        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
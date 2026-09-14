<?php
namespace App\Http\Controllers;
class BookController extends Controller {
    public function index() {
        $books = [
            ['id' => 1, 'judul' => 'Pemrograman PHP', 'penulis' => 'Andi', 'tahun' => 2021],
            ['id' => 2, 'judul' => 'Laravel Pemula', 'penulis' => 'Budi', 'tahun' => 2022],
            ['id' => 3, 'judul' => 'Basis Data', 'penulis' => 'Citra', 'tahun' => 2020],
            ['id' => 4, 'judul' => 'Jaringan Dasar', 'penulis' => 'Dewi', 'tahun' => 2019],
            ['id' => 5, 'judul' => 'Sistem Operasi', 'penulis' => 'Eko', 'tahun' => 2023],
        ];
        return view('books.index', compact('books'));
    }

    public function show($id) {
        return view('books.show', compact('id'));
    }
}
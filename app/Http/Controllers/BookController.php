<?php

namespace App\Http\Controllers;

use App\Models\Book; // Deklarasi mutlak agar Controller mengenali Model Book

class BookController extends Controller
{
    public function index()
    {
        // Menginstruksikan Eloquent ORM untuk mengekstraksi seluruh baris data dari tabel books
        $books = Book::all(); 
        
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}
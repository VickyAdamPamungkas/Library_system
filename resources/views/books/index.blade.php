@extends('layouts.app')
@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku Pergerakan</h2>
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: left; border-collapse: collapse;">
        <tr style="background-color: #f2f2f2;">
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <!-- Perhatikan transisi pemanggilan properti objek menggunakan '->' -->
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year }}</td>
            <td>{{ $book->stock }}</td>
            <td><a href="/books/{{ $book->id }}">Lihat Detail</a></td>
        </tr>
        @endforeach
    </table>
@endsection
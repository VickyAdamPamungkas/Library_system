@extends('layouts.app')
@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book['id'] }}</td>
            <td>{{ $book['judul'] }}</td>
            <td>{{ $book['penulis'] }}</td>
            <td>{{ $book['tahun'] }}</td>
            <td><a href="/books/{{ $book['id'] }}">Lihat Detail</a></td>
        </tr>
        @endforeach
    </table>
@endsection
@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <h2>{{ $data['title'] }}</h2>
    <p>{{ $data['desc'] }}</p>
    <ul>
        <li>Total Buku: {{ $data['books_count'] }}</li>
        <li>Total Kategori: {{ $data['categories_count'] }}</li>
        <li>Total Member: {{ $data['members_count'] }}</li>
    </ul>
@endsection
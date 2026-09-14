<?php
namespace App\Http\Controllers;
class DashboardController extends Controller {
    public function index() {
        $data = [
            'title' => 'Sistem Informasi Perpustakaan',
            'desc' => 'Aplikasi kelola buku sederhana',
            'books_count' => 5,
            'members_count' => 5,
            'categories_count' => 5
        ];
        return view('dashboard.index', compact('data'));
    }
}
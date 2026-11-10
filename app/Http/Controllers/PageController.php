<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username', 'Anggota');
        $bukuPilihan = $request->input('buku_pilihan', 'Belajar Laravel 11');
        $penulisPilihan = $request->input('penulis_pilihan', 'Penulis Umum');

        $activeBooks = [
            ['judul' => $bukuPilihan, 'penulis' => $penulisPilihan, 'tgl' => 'Hari ini'],
            ['judul' => 'Cantik Itu Luka', 'penulis' => 'Eka Kurniawan', 'tgl' => '28 Okt 2026'],
        ];

        $historyBooks = [
            ['judul' => 'Rumah', 'penulis' => 'J.S. Khairen', 'tgl' => '15 Okt 2026'],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tgl' => '02 Okt 2026'],
        ];

        session([
            'username' => $username,
            'active_books' => $activeBooks,
            'history_books' => $historyBooks
        ]);

        return redirect()->route('dashboard');
    }

    public function showDashboard()
    {
        $username = session('username', 'Anggota');
        $activeBooks = session('active_books', []);
        $historyBooks = session('history_books', []);

        return view('dashboard', compact('username', 'activeBooks', 'historyBooks'));
    }

    public function showPengelolaan()
    {
        $username = session('username', 'Anggota');
        $books = session('active_books', []);

        return view('pengelolaan', compact('username', 'books'));
    }

    public function showProfile()
    {
        $username = session('username', 'Anggota');
        return view('profile', compact('username'));
    }
}
@extends('layouts.app')

@section('title', 'Dashboard Perpustakaan')

@section('content')
<div class="space-y-6">
    <div class="bg-emerald-50 border border-emerald-100 rounded-2xl p-6 shadow-sm">
        <h1 class="text-2xl font-bold text-emerald-900">Selamat Datang, {{ $username }}! 📚</h1>
        <p class="text-emerald-700 text-sm mt-1">Berikut adalah rincian buku yang sedang Anda pinjam dan riwayat pengembalian.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 space-y-4">
            <div class="flex justify-between items-center border-b border-slate-100 pb-3">
                <h2 class="font-bold text-slate-800 text-lg">📖 Buku Sedang Dipinjam</h2>
                <span class="bg-blue-100 text-blue-700 text-xs px-2.5 py-1 rounded-full font-semibold">
                    {{ count($activeBooks) }} Buku
                </span>
            </div>
            <div class="space-y-3">
                @foreach($activeBooks as $book)
                <div class="p-3 bg-slate-50 rounded-xl border border-slate-100 flex justify-between items-center">
                    <div>
                        <p class="font-semibold text-slate-800 text-sm">{{ $book['judul'] }}</p>
                        <p class="text-xs text-slate-500">Penulis: {{ $book['penulis'] }}</p>
                    </div>
                    <span class="text-xs text-emerald-600 font-medium bg-emerald-50 px-2 py-1 rounded">Dipinjam</span>
                </div>
                @endforeach
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 space-y-4">
            <div class="flex justify-between items-center border-b border-slate-100 pb-3">
                <h2 class="font-bold text-slate-800 text-lg">✅ Riwayat Buku Selesai</h2>
                <span class="bg-emerald-100 text-emerald-700 text-xs px-2.5 py-1 rounded-full font-semibold">
                    {{ count($historyBooks) }} Buku
                </span>
            </div>
            <div class="space-y-3 max-h-60 overflow-y-auto">
                @foreach($historyBooks as $history)
                <div class="p-3 bg-slate-50 rounded-xl border border-slate-100 flex justify-between items-center">
                    <div>
                        <p class="font-semibold text-slate-800 text-sm">{{ $history['judul'] }}</p>
                        <p class="text-xs text-slate-500">Dikembalikan: {{ $history['tgl'] }}</p>
                    </div>
                    <span class="text-xs text-slate-600 font-medium bg-slate-200 px-2 py-1 rounded">Selesai</span>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
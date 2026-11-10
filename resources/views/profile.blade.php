@extends('layouts.app')

@section('title', 'Profil Anggota')

@section('content')
<div class="max-w-xl mx-auto bg-white rounded-2xl shadow-sm border border-slate-200 p-8 space-y-6">
    <div class="flex items-center space-x-4 border-b border-slate-100 pb-6">
        <div class="w-16 h-16 bg-emerald-700 text-white rounded-full flex items-center justify-center text-2xl font-bold shadow-md">
            {{ strtoupper(substr($username, 0, 1)) }}
        </div>
        <div>
            <h1 class="text-xl font-bold text-slate-800">{{ $username }}</h1>
            <p class="text-sm text-slate-500">Anggota Aktif Perpustakaan</p>
        </div>
    </div>

    <div class="space-y-4 text-sm">
        <div class="flex justify-between py-2 border-b border-slate-50">
            <span class="text-slate-500">ID Anggota</span>
            <span class="font-medium text-slate-800">LIB-2026-089</span>
        </div>
        <div class="flex justify-between py-2 border-b border-slate-50">
            <span class="text-slate-500">Status Keanggotaan</span>
            <span class="font-medium text-emerald-600">Aktif (Reguler)</span>
        </div>
        <div class="flex justify-between py-2">
            <span class="text-slate-500">Maksimal Peminjaman</span>
            <span class="font-medium text-slate-800">5 Buku / Minggu</span>
        </div>
    </div>
</div>
@endsection
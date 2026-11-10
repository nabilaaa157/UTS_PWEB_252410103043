@extends('layouts.app')

@section('title', 'Daftar Peminjaman Buku')

@section('content')
<div class="space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Manajemen Peminjaman Buku</h1>
            <p class="text-sm text-slate-500">Daftar buku yang sedang dipinjam oleh <span class="font-semibold text-emerald-700">{{ $username }}</span>.</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-100 text-slate-600 text-xs font-semibold uppercase tracking-wider">
                    <th class="px-6 py-3">#</th>
                    <th class="px-6 py-3">Judul Buku</th>
                    <th class="px-6 py-3">Penulis</th>
                    <th class="px-6 py-3">Tanggal Pinjam</th>
                    <th class="px-6 py-3">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 text-sm text-slate-700">
                @if(isset($books) && count($books) > 0)
                    @foreach($books as $index => $book)
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-6 py-4 font-medium">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-semibold text-slate-900">{{ $book['judul'] }}</td>
                        <td class="px-6 py-4 text-slate-600">{{ $book['penulis'] ?? '-' }}</td>
                        <td class="px-6 py-4">{{ $book['tgl'] ?? 'Hari ini' }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-blue-100 text-blue-700">
                                Dipinjam Aktif
                            </span>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-slate-400">Belum ada buku yang dicatat untuk dipinjam.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
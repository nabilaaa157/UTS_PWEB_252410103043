<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Pinjam Buku - Peminjaman Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-slate-200">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-slate-800">📖 Peminjaman Buku Perpustakaan</h1>
            <p class="text-sm text-slate-500 mt-1">Masukkan data peminjam dan buku yang ingin dipinjam</p>
        </div>
        <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Nama Anggota</label>
                <input type="text" name="username" required placeholder="Contoh: Nabila" 
                    class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Judul Buku</label>
                <input type="text" name="buku_pilihan" required placeholder="Contoh: Yang Telah Lama Pergi" 
                    class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Penulis Buku</label>
                <!-- Input baru khusus untuk penulis -->
                <input type="text" name="penulis_pilihan" required placeholder="Contoh: Tere Liye" 
                    class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:outline-none">
            </div>
            <button type="submit" class="w-full bg-emerald-700 text-white font-medium py-2 rounded-lg hover:bg-emerald-800 transition">
                Masuk & Catat Peminjaman
            </button>
        </form>
    </div>
</body>
</html>
<nav class="bg-emerald-700 text-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center max-w-6xl">
        <a href="{{ route('dashboard') }}" class="text-xl font-bold tracking-wide">Pinjam Buku</a>
        <div class="space-x-6 text-sm font-medium">
            <a href="{{ route('dashboard') }}" class="hover:text-emerald-200 transition">Dashboard</a>
            <a href="{{ route('pengelolaan') }}" class="hover:text-emerald-200 transition">Peminjaman Buku</a>
            <a href="{{ route('profile') }}" class="hover:text-emerald-200 transition">Profil</a>
            <a href="{{ route('login') }}" class="bg-emerald-800 px-3 py-1.5 rounded-lg hover:bg-emerald-900 transition">Keluar</a>
        </div>
    </div>
</nav>
<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Perpustakaan Digital')</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans flex flex-col min-h-screen">

@include('components.navbar')

<main class="flex-grow container mx-auto px-4 py-8 max-w-6xl">
@yield('content')
</main>

@include('components.footer')

</body>
</html>
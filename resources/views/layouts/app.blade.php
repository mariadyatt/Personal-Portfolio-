<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Maria Riclyn Diatera')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CSS (via Vite) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            font-family: 'Readex Pro', sans-serif;
            color: #fff;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col relative overflow-hidden">
    <!-- Gradient background -->
    <div class="absolute inset-0 -z-10 opacity-100 bg-[linear-gradient(to_bottom,_#e879f9_0%,_#121212_90%)]"></div>

    {{-- Navigation --}}
    @includeIf('partials.navbar')

    {{-- Main Page Content --}}
    <main class="flex-1 z-10">
        @yield('content')
    </main>

    {{-- Footer --}}
    @includeIf('partials.footer')
</body>
</html>

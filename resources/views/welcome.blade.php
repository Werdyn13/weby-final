<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BROD SHOP</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS + Flowbite -->
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
</head>

<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black min-h-screen flex items-center justify-center text-white font-sans">

<div class="text-center max-w-lg px-6 py-12 bg-gray-800/60 backdrop-blur-md rounded-2xl shadow-xl border border-gray-700">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4">BROD SHOP</h1>
    <p class="text-gray-300 mb-8">Vítejte na nejlepší stránce na nakupování elektroniky ve Zlínském Kraji.</p>

    @if (Route::has('login'))
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            @auth
                <a href="{{ url('/home') }}"
                   class="w-full sm:w-auto px-6 py-2.5 text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg shadow transition">
                    Domů
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="w-full sm:w-auto px-6 py-2.5 text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg shadow transition">
                    Přihlásit se
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="w-full sm:w-auto px-6 py-2.5 text-white bg-gray-600 hover:bg-gray-700 font-medium rounded-lg shadow transition">
                        Registrovat se
                    </a>
                @endif
            @endauth
        </div>
    @endif
</div>

</body>
</html>

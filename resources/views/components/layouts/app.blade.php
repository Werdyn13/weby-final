<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Web-Shop</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-lg font-bold">Web-Shop</a>
            <ul class="flex space-x-4">
                <li><a href="/products" class="hover:underline">Products</a></li>
                <li><a href="/about" class="hover:underline">About</a></li>
                <li><a href="/contact" class="hover:underline">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="container mx-auto py-8">
        {{ $slot }}
    </main>
    <footer class="bg-gray-800 text-white p-4 text-center">
        &copy; 2025 Electronic Web-Shop
    </footer>
</body>
</html>



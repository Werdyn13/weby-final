<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(10deg, #000000, #ffffff);
            color: #fff;
        }
        .container {
            text-align: center;
        }
    </style>
<div class="container">
    <h1>Welcome to Laravel</h1>
    @if (Route::has('login'))
        <div class="buttons">
            @auth
                <a href="{{ url('/home') }}" class="btn">Home</a>
            @else
                <a href="{{ route('login') }}" class="btn">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
</body>
</html>

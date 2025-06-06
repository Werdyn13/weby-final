<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
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
            max-width: 400px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        .btn {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
            background: #4caf50;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none; /* Remove underline */
        }
        .btn:hover {
            background: #45a049;
        }
        .btn-secondary {
            background: #2196f3;
            text-decoration: none; /* Remove underline */
        }
        .btn-secondary:hover {
            background: #1e88e5;
        }
    </style>
</head>
<body>
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

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="{{ env('APP_DESCRIPTION', 'Laravel description') }}">
    @vite(['resources/css/app.css'])
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            background-color: #f8fafc;
        }

        header {
            background-color: #004085;
            color: white;
            padding: 10px 20px;
        }

        header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .hero {
            background-color: #004085;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .hero a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
        }

        .hero a:hover {
            background-color: #0056b3;
        }

        .section {
            padding: 40px 20px;
            text-align: center;
            flex: 1; /* This ensures the section expands to fill the space */
        }

        .section h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 16px;
            color: #555;
        }

        footer {
            background-color: #004085;
            color: white;
            text-align: center;
            padding: 10px 20px;
        }

        footer a {
            color: #ffdd57;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<header>
    <nav>
        <div><a href="{{ url('/') }}">{{ config('app.name') }}</a></div>
        <div>
            <a href="{{ route('filament.auth.login') }}">{{ __('Login') }}</a>
        </div>
    </nav>
</header>

<section class="hero">
    <h1>{{ config('app.name') }}</h1>
    <p>{{ env('APP_DESCRIPTION', 'This is descriptions') }}</p>
    <a href="{{ route('filament.auth.login') }}">{{ __('Get Started') }}</a>
</section>




</body>

</html>

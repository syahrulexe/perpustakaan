<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ6eRkW2F6yfoeHUM5eV1m8Edz1kk4s6XddYZyyLw68K6tT8nQYZh56M5L61n" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset
            <main class="d-flex justify-content-center align-items-center" style="min-height: 100vh; text-align: center;">
                <div style="width: 100%;">
                    @auth
                        @if (Request::is('dashboard'))
                            <div class="bg-primary text-white px-4 py-4 rounded mb-4"> 
                                <h1>Syahrul Ramadhan</h1>
                                <h2>SI301</h2>
                                <h3>Sistem Informasi</h3>
                                <h4>Pemrograman Berbasis Web</h4>
                                <img src="https://kuliah.unsia.ac.id/assets/img/default-male.svg" 
                                     alt="Profile Picture" 
                                     class="mt-3 img-fluid d-block mx-auto" 
                                     style="max-width: 150px;">
                            </div>
                        @endif
                    @endauth
            
                    @yield('content')
                </div>
            </main>
            
        </div>
    </body>
</html>

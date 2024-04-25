<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-blue-100">

    <!-- Barra superior -->
    <x-header />

    <!-- Conteúdo da página -->
    <main>
        {{-- <div class="container mx-auto bg-white bg-opacity-50 shadow-lg rounded-lg p-4 my-4"> --}}
        <div>
            <!-- Aqui vai o conteúdo dinâmico de cada página -->
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-transparent p-4">
        <x-footer />
    </footer>


    <!-- scripts e modal do componente -->
    @stack('modals')

    @livewireScripts
</body>

</html>

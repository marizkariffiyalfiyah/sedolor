<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>SEDOLOR</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/logosedolor.png') }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased min-h-screen">

    {{-- Navbar --}}
    @include('layouts.header')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('layouts.footer')
    
    {{-- Aksesibilitas --}}
    @include('layouts.aksesibilitas')

</body>

</html>


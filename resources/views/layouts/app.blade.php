
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Sedulur')
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <style>
    [x-cloak] { display: none !important; }
</style>
</head>

<body class="min-h-screen">

    {{-- Navbar --}}
    @include('layouts.header')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('layouts.footer')

</body>

</html>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/">
    @vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>

{{-- <body class="h-full bg-red-100 bg-gray-50 md:bg-green-100 lg:bg-blue-100"> --}}
<body class="h-full">
    <div class="min-h-full">
        <main>
            <div class="px-6 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{$slot}}
                {{-- @yield('content') --}}
            </div>
        </main>
    </div>
    @livewireScripts
</body>

</html>


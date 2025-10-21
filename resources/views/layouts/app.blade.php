<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'naver-saving-app')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-950 text-gray-300 antialiased flex flex-col min-h-screen">
    
    @if (!request()->is('/'))
        @include('components.navbar')
    @endif

    <main class="flex-1 w-full @if(!request()->is('/')) max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 @else flex items-center justify-center px-4 @endif">
        @yield('content')
    </main>
    
    @if (!request()->is('/'))
        @include('components.footer')
    @endif
    
</body>
</html>
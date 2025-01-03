<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="min-h-screen">
        @include('layouts.navigation')
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header ?? '' }}
            </div>
        </header>
        <!-- Page Content -->
        <main class="py-8">
            {{ $slot ?? ($content ?? '') }}
        </main>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>

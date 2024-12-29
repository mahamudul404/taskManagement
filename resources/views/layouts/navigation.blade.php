<!-- layouts/navigation.blade.php -->
<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 text-white text-lg font-bold">
                    <a href="/">Task Management</a>
                </div>
            </div>
            <div class="block">
                @auth
                    <a href="{{ route('logout') }}" class="text-white">Logout</a>
                @else
                    <a href="{{ route('login') }}" class="text-white">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
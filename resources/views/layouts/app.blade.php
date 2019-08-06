<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('layouts.head')

    @yield('head')
</head>
<body>
    <div id="app">
        
        @include('layouts.navbar')

        <main class="py-4 mt-5">
            @yield('content')
        </main>
    </div>
    @include('layouts.scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="bg-gray-300">
    @if (Auth::check())
        @include('layouts.header')
    @endif
    <div class="container mt-4">
        @yield('content')
    </div>
</body>

</html>

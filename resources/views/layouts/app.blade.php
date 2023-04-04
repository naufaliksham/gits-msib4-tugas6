<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    @if (Auth::check())
        @include('layouts.header')
    @endif
    <div class="container mt-4">
        @yield('content')
    </div>
</body>

</html>

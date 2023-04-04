<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div>
        <h1>Login</h1>
        @if($errors->has('login'))
            <p>{{ $errors->first('login') }}</p>
        @endif
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <form action="userLogin/login" method="POST">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
                @error('email')
                    <div class="">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
                @error('password')
                    <div class="">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</body>

<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div>
        <h1>Register</h1>
        
        @if($errors->has('register'))
            <p>{{ $errors->first('register') }}</p>
        @endif

        <form action="create" method="POST">
            @csrf
            <div>
                <label for="name">Nama</label>
                <input type="name" name="name">
                @error('name')
                    <div class="">{{ $message }}</div>
                @enderror
            </div>
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
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</body>

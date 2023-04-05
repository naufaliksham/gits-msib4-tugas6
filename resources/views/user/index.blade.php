<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    @if (session('success'))
        <div class="mx-5 mb-4 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline text-blue">{{ session('success') }}</span>
        </div>
    @endif
    <form action="userLogin/login" method="POST"
        class="bg-[#111827] p-4 m-[5%] flex-col justify-center items-center rounded-lg">
        @csrf
        <div class="text-center font-bold text-[72px] text-white mb-4">Login</div>
        @if ($errors->has('login'))
            <div class="mb-4 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline text-red">{{ $errors->first('login') }}</span>
            </div>
        @endif
        @if (session('success'))
            <div class="mb-4 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline text-blue">{{ session('success') }}</span>
            </div>
        @endif
        <div class="mb-6">
            <label for="email" class="block mb-2 ml-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
        </div>
        @error('email')
            <div class="mb-4 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline text-red">{{ $message }}</span>
            </div>
        @enderror
        <div class="mb-6">
            <label for="password" class="block mb-2 ml-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
        </div>
        @error('password')
            <div class="mb-4 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline text-red">{{ $message }}</span>
            </div>
        @enderror
        <div class="flex items-start mb-6">
            <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Belum punya akun? <a
                    href="userLogin/register" class="text-blue-600 hover:underline dark:text-blue-500">ayo daftar</a></label>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</body>

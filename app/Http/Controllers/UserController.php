<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        return view('user/index');
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $loginSession = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // proses autentifikasi
        if (Auth::attempt($loginSession)) {
            return redirect('produk')->with('success', 'Login sukses');
        } else {
            return redirect('userLogin')->withErrors(['login' => 'Email atau password salah']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('userLogin')->with('success', 'Logout sukses');
    }

    public function register(){
        return view('user.register');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukan email yang valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        User::create($data);

        $loginSession = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // proses autentifikasi
        if (Auth::attempt($loginSession)) {
            return redirect('produk')->with('success', Auth::user()->name.' register sukses');
        } else {
            return redirect('userLogin')->withErrors(['register' => 'Email atau password tidak valid']);
        }
    }
}

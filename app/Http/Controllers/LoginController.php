<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == '7') {
                return redirect()->intended('user');
            } elseif ($user->role == '1'){
                return redirect()->intended('dashboard_mhs');
            } elseif ($user->role == '6'){
                return redirect()->intended('user1');
            } elseif ($user->role == '3'){
                return redirect()->intended('dashboard_bak');
            } elseif ($user->role == '2') {
                return redirect()->intended('dashboard_dosen');
            }
        } 
        return view('login');
    }
        
    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );
        
        $kredensil = $request->only('email', 'password');
    
        if (Auth::attempt($kredensil)) {
            $user = Auth::user();
            session()->flash('success', 'Login berhasil! Selamat datang.');

            if ($user->role == '7') {
                return redirect()->intended('user');
            } elseif ($user->role == '1') {
                return redirect()->intended('dashboard_mhs');
            } elseif ($user->role == '6') {
                return redirect()->intended('user1');
            } elseif ($user->role == '3') {
                return redirect()->intended('dashboard_bak');
            } elseif ($user->role == '2') {
                return redirect()->intended('dashboard_dosen');
            }
        }
        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }        
}
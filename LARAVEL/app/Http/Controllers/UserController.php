<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\m_konsultasi;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register_action(Request $request)
    {
        $user = new User([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'user'
        ]);
        $user->save();
        return redirect('login')->with('success', 'Sukses, silahkan login');
    }
    public function login_action(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('user');
        }
        return back()->with('error', 'Username/password salah');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function index()
    {
        return view('dashboard');
    }
    public function dashboarduser()
    {
        return view('user.dashboard-user');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register_action(Request $request)
    {
        $user = new User([
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->save();
        return redirect('login')->with('success', 'Sukses, silahkan login');
    }
}

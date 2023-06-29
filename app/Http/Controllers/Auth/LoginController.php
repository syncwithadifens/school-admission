<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $role = session('role');
        if ($role == 'admin') {
            return redirect('dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user) {
            if (password_verify($request->password, $user->password)) {
                if ($user->role == 'admin') {
                    $sessionData = [
                        'id' => $user->id_admin,
                        'username' => $user->username,
                        'role' => $user->role
                    ];
                    session($sessionData);

                    return redirect('dashboard')->with('pesan', 'Login Berhasil');
                } else {
                    return back()->with('status', 'Akun ini tidak terdaftar sebagai admin');
                }
            }
        }

        return back()->with('status', 'Username / Password Salah');
    }

    public function getAllUser()
    {
        $data = [
            'status' => 'user',
            'user' => User::all()
        ];
        return view('auth.user', $data);
    }

    public function delete($id)
    {
        User::where('id_admin', $id)->delete();
        return redirect('users')->with('pesan', 'Data user berhasil dihapus');
    }

    public function logout()
    {
        session()->flush();
        return redirect('login');
    }
}

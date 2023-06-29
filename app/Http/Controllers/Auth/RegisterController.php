<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            'nm_admin' => 'required',
            'username' => 'required|unique:tb_admin',
            'password' => 'required|min:8'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('login')->with('status', 'Registrasi berhasil!');
    }

    public function edit($id)
    {
        $data = [
            'status' => 'user',
            'data' => User::where('id_admin', $id)->first()
        ];
        return view('auth.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nm_admin' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',

        ]);

        $resource = User::findOrFail($id);
        $resource->update($validateData);

        return redirect('users')->with('pesan', 'Data user berhasil diubah');
    }
}

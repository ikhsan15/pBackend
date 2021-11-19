<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    # membuat fitur register 
    public function register(Request $request)
    {
        # melakukan validasi data
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        # menginsert data inputan ke dalam table user
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        # membuat token sesuai dengan user
        $token = $user->createtoken('myapptoken')->plainTextToken;

        # response yang berisi user dan token
        $response = [
            'user' => $user,
            'token' => $token
        ];
        # response yang dikirimkan jika data berhasil di kirim dengan kode 201
        return response($response, 201);
    }

    # membuat fitur login untuk memasukan user dan password yang sudah dibuat tadi
    public function login(Request $request)
    {
        # memuat validasi data inputan
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        # mengecek email yang di input
        $user = User::where('email', $fields['email'])->first();
        # mengecek password yang di input
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'password atau email salah'
            ], 401);
        }
        # memasukan token yang sudah diregister tadi
        $token = $user->createtoken('myapptoken')->plainTextToken;

        # response yang berisi user dan token
        $response = [
            'user' => $user,
            'token' => $token
        ];

        # response yang dikirimkan jika data berhasil di kirim dengan kode 201
        return response($response, 201);
    }

    # membuat fitur logout untuk mengapus token dan sesi login
    public function logout(Request $request)
    {
        # menghapus token user 
        auth()->user()->tokens()->delete();

        #response jika berhasil logout
        return [
            'message' => 'Logged out'
        ];
    }
}

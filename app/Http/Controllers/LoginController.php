<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest'])->except('logout');
    }

    public function login()
    {
        if (request()->isMethod('POST')) {

            $message = [
                "username.required" => "Username harus di isi",
                "username.exists"   => "Username tidak terdaftar",
                "password.required" => "Password harus di isi",
                "password.min"      => "Password harus lebih dari 8 karakter",
            ];

            $validator = Validator::make(
                request()->all(),
                [
                    'username' => 'required|exists:users,username',
                    'password' => 'required|min:8',
                ],
                $message
            );

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            } else {
                $credentials = [
                    'username' => request('username'),
                    'password' => request('password'),
                ];
                if ($this->isAuth($credentials)) {
                    return redirect()->route('adminberanda');
                }
                return redirect()->back()->withInput()->withErrors(
                    [
                        'password' => 'Periksa Kembali Username atau Password Anda',
                    ]
                );
            }
        }

        return view('login');
    }

    public function isAuth($credentials = [])
    {
        if (count($credentials) > 0 && Auth::attempt($credentials)) {
            return true;
        }

        return false;
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

}

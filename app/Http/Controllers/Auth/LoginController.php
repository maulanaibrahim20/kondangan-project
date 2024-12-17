<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        return view('auth.login');
    }

    public function process(Request $request)
    {
        $user = $this->user->where('username', $request->username)->first();
        if (!$user) {
            return redirect('/login')->with('error', 'Periksa kembali username dan password anda');
        }
        if (!Hash::check($request->password, $user->password)) {
            return redirect('/login')->with('error', 'Periksa kembali username dan password anda');
        }
        if (Auth::attempt(["username" => $request->username, "password" => $request->password])) {
            $request->session()->regenerate();

            return redirect('/admin/dashboard')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Gagal melakukan autentikasi');
    }
}

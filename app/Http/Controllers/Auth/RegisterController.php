<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    protected $user;

    public function __construct() {
        $this->user = new User();
    }

    public function index()
    {
        return view('auth.register');
    }

    public function process(Request $request) {
        DB::beginTransaction();

        $validator = Validator::make($request->all(), [
            "first_name" => "required|max:50",
            "last_name" => "required|max:50",
            "username" => "required|max:100|unique:users,username",
            "password" => "required|min:6|max:255",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "code" => "111",
                "messages" => "Fill data correctly!"
            ]);
        }

        try {
            $this->user->create([
                "name" => "{$request->first_name} {$request->last_name}",
                "username" => $request->username,
                "email" => Str::random(13),
                "phone" => Str::random(13),
                "password" => Hash::make($request->password)
            ]);

            DB::commit();
            return response()->json([
                "code" => "000",
                "messages" => "Your account has been registered!"
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                "code" => "111",
                "messages" => "Something went wrong!"
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of($this->user->query())->addIndexColumn()->toJson();
        }
        return view('admin.pages.user.index');
    }

    public function create(Request $request)
    {
        return view('admin.pages.user.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        $validator = Validator::make($request->all(), [
            "name" => "required|max:150|min:3",
            "username" => "required|max:100|min:3|unique:users,username",
            "phone" => "required|max:15|min:8",
            "email" => "required|email|max:100",
            "password" => "required|min:6|max:255|same:confirm_password",
            "confirm_password" => "required|min:6|max:255|same:password",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "code" => "111",
                "messages" => "Fill data correctly!"
            ]);
        }

        try {
            $this->user->create([
                "name" => $request->name,
                "username" => $request->username,
                "email" => $request->email,
                "phone" => $request->phone,
                "password" => Hash::make($request->password)
            ]);

            DB::commit();
            return response()->json([
                "code" => "000",
                "messages" => "User has been registered!"
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                "code" => "111",
                "messages" => "Something went wrong!"
            ]);
        }
    }

    public function show($id)
    {
        $data['view'] = $this->user->where('id', $id)->first();
        return view('admin.pages.user.view', $data);
    }

    public function edit($id)
    {
        $data['edit']  = $this->user->where('id', $id)->first();
        return view('admin.pages.user.edit', $data);
    }
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        $validator = Validator::make($request->all(), [
            "name" => "required|max:150|min:3",
            "username" => [
                "required",
                "max:100",
                "min:3",
                Rule::unique("users", "username")->ignore($id)
            ],
            "phone" => "required|max:15|min:8",
            "email" => "required|email|max:100",
            "password" => "max:255|same:confirm_password",
            "confirm_password" => "max:255|same:password",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "code" => "111",
                "messages" => "Fill data correctly!"
            ]);
        }

        $user = $this->user->find($id);
        if (!$user) {
            return response()->json([
                "code" => "111",
                "messages" => "User not found!"
            ]);
        }

        if ($user->id == 1) {
            return response()->json([
                "code" => "111",
                "messages" => "You can't edit this user!"
            ]);
        }

        if (!$request->password) {
            $password = $user->password;
        } else {
            $password = Hash::make($request->password);
        }

        try {
            $user->update(array_merge($request->only(["name", "username", "phone", "email"]), [
                "status" => $request->status == "on" ? true : false,
                "password" => $password
            ]));

            DB::commit();
            return response()->json([
                "code" => "000",
                "messages" => "User has been updated!"
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                "code" => "111",
                "messages" => "Something went wrong!"
                // "messages" => $th->getMessage()
            ]);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        $user = $this->user->find($id);
        if (!$user) {
            return response()->json([
                "code" => "111",
                "messages" => "User not found!"
            ]);
        }

        if ($user->id == 1) {
            return response()->json([
                "code" => "111",
                "messages" => "You can't delete this user!"
            ]);
        }

        try {
            $user->delete();

            DB::commit();
            return response()->json([
                "code" => "000",
                "messages" => "User has been deleted!"
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

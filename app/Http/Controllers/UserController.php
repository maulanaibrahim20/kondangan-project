<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

    public function store(Request $request) {}

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
    public function update(Request $request, $id) {}

    public function destroy($id) {}
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(20); //User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request) {

        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit(string $id) {

        // $user = User::where('id', '=', $id)->first();
        // $user = User::where('id', $id)->first(); retorna o usuário ou null. firstOrFail()
        if(!$user = User::find($id)) {
            return redirect()->route('users.index')->with('message', 'User not found.');
        }

        return view('admin.users.edit', compact('user'));

    }

    public function update(string $id) {
            if (!$user = User::find($id)) {
                return back()->with('message', 'User not found.');
            }

            $user->update(request()->only(
                ['name', 'email']
            ));
            return redirect()->route('users.index')->with('success', 'User updated successfully.');

        }
}

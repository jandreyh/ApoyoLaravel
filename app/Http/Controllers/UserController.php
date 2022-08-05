<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return back();

    }
    public function destroy(User $user){
        $user->delete();

        return back();

    }
}


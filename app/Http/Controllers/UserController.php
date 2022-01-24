<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store()
    {
        $attr = request()->validate([
           'name' => 'required|max:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7'
        ]);

        User::create($attr);

        return redirect('/')->with('success', 'A new user has been created.');
    }


    public function edit(User $user)
    {
        return view('users.update', ['user' => $user]);
    }


    public function update(User $user)
    {
        $attr = request()->validate([
            'name' => 'required|max:10',
            'email' => 'required|email',
            'password' => 'required|min:7'
        ]);

        $user->update($attr);

        return redirect('/users')->with('success', 'User Updated!');
    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with('success', 'User Deleted!');
    }
}

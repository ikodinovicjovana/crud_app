<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
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

}

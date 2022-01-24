<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attr = request()->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if (!auth()->attempt($attr)) {
            return back()->withInput()->withErrors(['email' => 'The email is not valid.']);
        }

        session()->regenerate();
        return redirect('/welcome')->with('success', 'Welcome back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}

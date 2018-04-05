<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function create() {
        return view('registration.create');
    }

    public function store() {
        $this->validate(request(), [
           'name' => 'required',
           'email' => 'required',
           'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        if(! Auth::check()) {
            auth()->login($user);
        }

        return redirect()->home();
    }
}

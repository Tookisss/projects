<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create() {
        return view('session.login');
    }

    public function store() {
        if(! Auth()->attempt(request(['email', 'password']))) {
            return redirect('/login')->withErrors(['Please check Your credintials...']);
        }

        return redirect('/');
    }

    public function destroy() {
        auth()->logout();

        return redirect('/');
    }
}

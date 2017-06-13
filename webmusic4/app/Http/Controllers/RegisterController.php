<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create() {
        return view('register.register');
    }

    public function store() {
          $this->validate(request(), [
              'name'=>'required',
              'email'=>'required|email',
              'password'=>'required|confirmed'
          ]);

          $register = new User;
          $register->name=request('name');
          $register->email=request('email');
          $register->password=Hash::make(request('password'));
          $register->save();

          auth()->login($register);

          return redirect('/');
      }
}

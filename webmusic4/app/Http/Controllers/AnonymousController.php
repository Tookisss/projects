<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anonymous;
use App\Mail\AnonymousRequest;

class AnonymousController extends Controller
{
  public function send() {
      $this->validate(request(), [
          'name'=>'required|min:2',
          'email'=>'required|email',
          'text'=>'required'
      ]);

      $sender = new anonymous;
      $sender->name=request('name');
      $sender->email=request('email');
      $sender->text=request('text');
      $sender->save();

      \Mail::to($sender)->send(new AnonymousRequest);

      return redirect('/');
  }

}

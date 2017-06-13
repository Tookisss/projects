<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function store(Data $id) {
        $this->validate(request(), [
            'post_title'=>'required',
            'post_message'=>'required|min:2'
        ]);

        $comment=new Post;
        $comment->user_id=auth()->user()->id;
        $comment->data_id=$id['id'];
        $comment->post_title=request('post_title');
        $comment->post_message=request('post_message');
        $comment->save();

        return back();
    }

}

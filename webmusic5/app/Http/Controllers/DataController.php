<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Illuminate\Support\Facades\Storage;
use App\Tag;
use App\Post;


class DataController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'index_mtv', 'index_vevo', 'index_grammy']);
    }


    public function index(Data $data_upload) {
        $id= Data::get($data_upload->id);

        if(count($id) > 3) {
            $collection=Data::get($data_upload->id);
            $random = $collection->random(3);
            $random->all();

            return view('extends.infopage', compact('random', 'id'));
        }

        return view('extends.infopage', compact('id'));
    }


    public function create() {
        return view('extends.upload');
    }

    public function store() {
        $this->validate(request(), [
            'image'=>'required',
            'title'=>'required|min:2',
            'artist'=>'required|min:2',
            'length'=>'required',
            'genre'=>'required',
            'released'=>'required',
            'tags_id'=>'required'
        ]);

        $data_upload=new Data;
        $data_upload->image=request('image')->store('image');
        $data_upload->title=request('title');
        $data_upload->artist=request('artist');
        $data_upload->length=request('length');
        $data_upload->genre=request('genre');
        $data_upload->released=request('released');
        $data_upload->tags_id=request('tags_id');
        $data_upload->save();

        $data=Data::find($data_upload->id);
        $data->tags()->attach($data_upload->tags_id);

        return redirect('/');
    }

    public function index_mtv() {

        $mtvs=Data::whereHas('tags', function($id) {
            $id->where('tags_id', '=', '1');
            })->get();

        return view('extends.mtvpage', compact('mtvs'));
    }

    public function index_vevo() {
        $vevos=Data::whereHas('tags', function($id) {
            $id->where('tags_id', '=', '2');
        })->get();

        return view('extends.vevopage', compact('vevos'));
    }

    public function index_grammy() {
        $grammys=Data::whereHas('tags', function($id) {
            $id->where('tags_id', '=', '3');
        })->get();

        return view('extends.grammypage', compact('grammys'));
    }

    public function destroy($id) {
          $item=Data::find($id);
          $item->delete();

          return redirect('/');
    }

    public function edit($id) {
        $item=Data::find($id);

        return view('extends.edit', compact('item'));
    }

    public function update($id) {
      $this->validate(request(), [
          'image'=>'required',
          'title'=>'required|min:2',
          'artist'=>'required|min:2',
          'length'=>'required',
          'genre'=>'required',
          'released'=>'required',
          'tags_id'=>'required'
      ]);

      $data_upload=Data::find($id);
      $data_upload->tags()->detach($data_upload->tags_id);
      $data_upload->image=request('image')->store('image');
      $data_upload->title=request('title');
      $data_upload->artist=request('artist');
      $data_upload->length=request('length');
      $data_upload->genre=request('genre');
      $data_upload->released=request('released');
      $data_upload->tags_id=request('tags_id');
      $data_upload->save();

      $data=Data::find($data_upload->id);
      $data->tags()->attach($data_upload->tags_id);

      return redirect('/');
    }

      public function show($id, Post $comment) {
      $chart=Data::find($id);
      $forums=Post::latest()->get($comment->data_id);

      return view('extends.posts', compact('chart', 'forums'));
      }
}

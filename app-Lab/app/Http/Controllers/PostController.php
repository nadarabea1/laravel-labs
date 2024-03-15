<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index(){
        $posts= \App\Models\Post::all();
        return view('posts.index', ['posts'=> $posts]);
    }
    public function show(string $id){
        $post= \App\Models\Post::find($id);
        return view('posts.show', ['post'=> $post]);


    }

    public function create(){
        return view('posts.create');

    }
    public function store(Request $req){
        $req->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        \App\Models\Post::create(['title' => $req->title, 'body' => $req->body, 'enabled' => $req->enabled ,'published_at' => $req->published_at]);
        return redirect()->route('posts.index');
    }
    public function edit(string $id){
        $post= \App\Models\Post::find($id);

        return view('posts.edit', ['post'=> $post]);
    }
    public function update(Request $req ,string $id){
        $req->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = \App\Models\Post::find($id);
        $post->update($req->all());
        return redirect()->route('posts.index');
    }

    public function destroy(string $id){
        $post= \App\Models\Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');

    }


}

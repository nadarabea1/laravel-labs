<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    // public function destory(){
    //     $del = \App\Models\Post::find(1);
    //     $del->delete();
    //     $posts = \App\Models\Post::onlyTrashed()->get();
    //     return view('posts.destory', ['posts'=> $posts]);


    // }
    public function create(){
        return view('posts.create');

    }
    public function store(Request $req){

    }
    public function edit(string $id){
        $post= \App\Models\Post::find($id);

        return view('posts.edit', ['post'=> $post]);
    }
    public function update(Request $req ,string $id){
    }
    public function destroy(string $id){
    }

}

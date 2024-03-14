<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function show(string $id){
        return view('posts.show')->with(
            ['id'=> $id, 'title' => "post $id title"]
        );

    }
    public function create(){
        return view('posts.create');

    }
    public function store(Request $req){

    }
    public function edit(string $id){
        return view('posts.edit')->with(
            ['id'=> $id, 'title' => "post $id title"]
        );
    }
    public function update(Request $req ,string $id){
    }
    public function destroy(string $id){
    }

}

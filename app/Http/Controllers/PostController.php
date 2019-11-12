<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {

    public function index() {

        $posts = Post::orderBy('views', 'DESC')
            ->orderBy('created_at')
            ->paginate(10);

        return view('index', ['posts'=>$posts]);
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('showPost', ['post'=>$post]);
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

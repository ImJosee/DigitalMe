<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {

    public function index(Request $request) {
        $posts = Post::query();

        if($request->has('search')) {
            $search = $request->get('search');
            $posts->where('title', 'like', '%'.$search.'%');
        }

        $data = $posts
            ->orderBy('created_at', 'DESC')
            ->paginate(12);

        return view('index', ['posts'=>$data]);
    }

    public function create() {   
        return view('post.createPost');
    }

    public function store(Request $request) {
        Post::create([
            'title' => $request['title'],
            'subtitle' => $request['subtitle'],
            'user_id' => auth()->user()->id,
            'content' => $request['content']
        ]);
        return redirect('/profile/'.auth()->user()->id);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.showPost', ['post'=>$post]);
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

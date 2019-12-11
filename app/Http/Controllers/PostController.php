<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

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
            'content' => $request['content'],
            'image' => basename($request->file('post_image')->store('public'))
        ]);
        return redirect('/profile/'.auth()->user()->id);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        if(Auth::check()) {
            if(!$post->getViews->contains('id', auth()->user()->id)) {
                $post->getViews()->attach(auth()->user()->id);
            }
        }
        return view('post.showPost', ['post'=>$post]);
    }

    public function edit(Post $id) {
        return view('post.editPost', [
            'post' => $id
        ]
        );
    }


    public function update(Request $request, Post $id) {
        $id->title = $request['title'];
        $id->subtitle = $request['subtitle'];
        $id->content = $request['content'];
        
        if($request->file('post_image') != null) {
            $route = $request->file('post_image')->store('public');
            $name = basename($route);
            $id->image = $name;
        }
        $id->save();
        return redirect('/profile');
    }

    public function destroy(Post $id) {
        $id->forceDelete();
        return redirect()->action('UserController@show', ['id' => auth()->user()->id]);
    }

    public function like(Post $id) {
        auth()->user()->likes()->toggle($id->id);
        return redirect()->action('PostController@show', ['id' => $id->id]);
    }
}

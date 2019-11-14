<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {

    public function index(Request $request) {
        if(isset($request['search'])) {
            $search = $request['search'];
            if(is_numeric($search)) {
                return redirect()->action('PostController@show', [
                    'id' => $request['search']
                ]);
            }
        }

        $posts = Post::orderBy('created_at', 'DESC')
            ->paginate(12);

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
        return view('posts.showPost', ['post'=>$post]);
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

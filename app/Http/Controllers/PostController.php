<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {

    public function index(Request $request) {
        if(isset($request['search'])) {
            dd($request['search']);
        }

        $posts = Post::orderBy('views', 'DESC')
            ->orderBy('created_at')
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
        /*
            No deberias poder entrar cuantas veces quieras
            a tu post para darte muchas visitas.
        */
        $post->views += 1;
        $post->updated_at = time();
        $post->update();
        /*
            Te lleva a la vista con las visitsa actualizadas.
        */
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

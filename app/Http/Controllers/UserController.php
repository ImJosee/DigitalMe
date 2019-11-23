<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index(Request $request) {
        if(Auth::check()) {
            return redirect()->action('UserController@show', ['id'=>Auth::user()->id]);
        }
        return redirect('/login');
    }

  
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id) {
        $user = User::findOrFail($id);
        $userPosts = $user->posts()->paginate(12);

        return view('user.profile', [
            'user' => $user,
            'userPosts' => $userPosts,
            ]
        );
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

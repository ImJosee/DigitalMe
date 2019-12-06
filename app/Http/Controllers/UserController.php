<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index(Request $request) {
        $users = User::query();

        if($request->has('search')) {
            $search = $request->get('search');
            $users->where('name', 'like', '%'.$search.'%');
        }

        $data = $users
            ->orderBy('created_at', 'DESC')
            ->paginate(12);

        return view('usersList', ['users'=>$data]);
    }

  
    public function create()
    {
        //
    }

    public function profile() {
        return redirect()->action('UserController@show', ['id'=>Auth::user()->id]);
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

    public function edit($id) {
        $user = User::find($id);

        return view('user.editProfile', [
            'user' => $user
        ]
        );
    }

    public function update(Request $request, User $id) {
        $id->name = $request['name'];
        $id->getNormalUser->last_name = $request['last_name'];
        $id->web = $request['web'];
        $id->location = $request['location'];
        $id->save();
        $id->getNormalUser->save();
        return redirect('/profile');
    }

    public function destroy($id)
    {
        //
    }
}

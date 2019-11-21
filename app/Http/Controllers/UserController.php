<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function index()
    {
        
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
        return view('user.profile', ['user'=>$user]);
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

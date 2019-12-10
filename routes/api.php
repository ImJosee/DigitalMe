<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', function() {
    return response()->json(\App\Post::paginate(10));
});

Route::post('/questions', function(Request $req) {

});

Route::post('/login', function(Request $request) {
    $user = \App\User::where('email', '=', $request['email'])->first();
    if($user != null) {
        return [
            'success' => Hash::check($request['password'], $user->password)
        ];
    }
    return ['success' => false];
});
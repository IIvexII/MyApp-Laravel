<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userPosts($id)
    {
        $posts = User::find($id)->posts;

        return view('userPosts', compact('posts'));
    }
    public function showAllUsers()
    {  
        $users = User::all();
        return view('allUsers', compact('users'));
    }
    public function createUser(Request $req)
    {
        $name = $req->input()['name'];
        $password = sha1($req->input()['password']);

        User::create([
            'name' => $name,
            'password' => $password
        ]);
        return redirect('/users');
    }
    
    public function showPostForm()
    {
        $users = User::all();
        return view('createPostForm', compact('users'));
    }
}

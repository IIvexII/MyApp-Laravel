<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    // Show all posts
    public function showAllPosts()
    {
        $posts = Post::all()->sortByDesc('created_at');
        
        return view('allPosts', compact('posts'));
    }

    // Search the post via id
    public function searchById(Request $request)
    {
        $id = $request->input()["id"];

        if(!empty($id))
        {
            $post = Post::find($id);

            $postsCount = count(compact('post'));
            if ($postsCount > 0)
            {
                return view('post', compact('post'));
            }
            else
            {
                abort(404);
            }
        }
        else
        {
            abort(404);
        }

    }

    // Create new post
    public function createPost(Request $req)
    {
        $user_id = $req->input()['user_id'];
        $title = $req->input()['title'];
        $content = $req->input()['content'];
        $post = new Post;

        $post->create([
            'user_id' => $user_id,
            'title' => $title,
            'content' => $content
        ]);

        return redirect('/posts');
    }

    public function showDataForUpdate($id)
    {
        $post = Post::find($id);
        $users = User::all() ;

        return view('updateForm', compact('post', 'users'));
    }

    public function updatePost(Request $req)
    {
        $id = $req->input()['id'];
        $user_id = $req->input()['user_id'];
        $title = $req->input()['title'];
        $content = $req->input()['content'];

        $post = Post::find($id);

        $post->update([
            'user_id' => $user_id,
            'title' => $title,
            'content' => $content
        ]);

        return redirect('/');
    }

    public function deletePost($id)
    {
        Post::destroy($id);

        return redirect('/');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getPost()
    {

        return response()->json(Post::all(), 200);
    }
    public function  createPost(Request $request)
    {

        $post = Post::where("title", $request->title)->first();
        if ($post) {
            return response()->json('El post ya existe', 200);
        }
        $post = Post::create($request->all());
        return response()->json('post register sucsses', 200);
    }

    public function editPost(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json('El post no existe', 200);
        }
        $post->update($request->all());
        return response()->json('post edit sucsses', 200);
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json('El post no existe', 200);
        }
        $post->delete();
        return response()->json('post delete sucsses', 200);
    }

    public function postByUser($id)
    {
        $post = Post::where("user_id", $id)->get();
        if (!$post) {
            return response()->json('El usuario no tiene post', 200);
        }
        return response()->json($post, 200);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts');
    }

    public function add(Request $request){
        $post = new Post;
        $post->fill($request->all());
        $post->save();

        return response()->json('Post successfully added!');
    }

    public function update(Request $request, $id){
        $post = Post::where('id', $id)->first();

        if($post){

            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->save();

            return response()->json('Post updated successfully!');
        }
    }

    public function delete($id){
        $post = Post::find($id);

        if($post){
            $post->delete();
            return response()->json('Post deleted successfully!');
        }
    }
    public function get(){
        $post = Post::get();

        return response()->json($post);
    }

    public function getById($id){
        $post = Post::find($id);

        return response()->json($post);
    }


}

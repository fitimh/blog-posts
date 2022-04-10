<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('posts');
    }

    public function add(Request $request){
        $post = new Blog;
        $post->fill($request->all());
        $post->save();

        return response()->json('Post successfully added!');
    }

    public function update(Request $request, $id){
        $post = Blog::where('id', $id)->first();

        if($post){

            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->save();

            return response()->json('Post updated successfully!');
        }
    }

    public function delete($id){
        $post = Blog::find($id);

        if($post){
            $post->delete();
            return response()->json('Post deleted successfully!');
        }
    }
    public function get(){
        $post = Blog::get();

        return response()->json($post);
    }

    public function getById($id){
        $post = Blog::find($id);

        return response()->json($post);
    }


}

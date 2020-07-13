<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class PostsController extends Controller
{

    public function index(){

        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('home')->with('posts', $posts);


    }

    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' =>'required',
            'description' => 'required',

        ]);

        print_r($request->input());
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = auth()->user()->id;
        echo $post->save();

        return redirect('/home');
    }

    public function destroy($id)
    {
        $product = Post::find($id);
        $product->delete();
        return redirect('/your-posts');
    }


}

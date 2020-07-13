<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class YourController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id)->posts()->orderBy('created_at', 'desc')->get();

        return view('your-posts')->with('posts', $user);
    }

    public function create()
    {
        return view('your-posts');
    }

}

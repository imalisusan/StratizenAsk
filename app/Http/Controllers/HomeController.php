<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return view('posts.index', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function profile()
    {
        $author_id = Auth::user()->id;
        $posts = DB::table('posts')->where('user_id', "=", $author_id)->get();
        return view('home', compact('posts'));
    }
    
}

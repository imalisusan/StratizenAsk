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
        $status = "published";
        $posts = Post::latest()->where('status', "=", $status)->paginate(20);
        return view('posts.index', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function profile()
    {
        $author_id = Auth::user()->id;
        $posts = Post::latest()->where('user_id', "=", $author_id)->paginate(20);
        return view('profile', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 20);
    }
    
<<<<<<< HEAD
    public function faq()
    {
        return view('faq');
    }
<<<<<<< HEAD
<<<<<<< HEAD
    public function search(Request $request)
    {
        $key = $request->query('searchKey');
        $posts = Post::search($searchKey)->get();
        return view('search', compact('posts'));
    }
=======
>>>>>>> parent of 4dfb59b... 00_Laravel search functionality 01_ FAQ UI modification
=======
>>>>>>> parent of 25e1103... Merge pull request #37 from imalisusan/imali
    
=======
>>>>>>> parent of 49f973d... Merge pull request #36 from imalisusan/Whitneycommits
}

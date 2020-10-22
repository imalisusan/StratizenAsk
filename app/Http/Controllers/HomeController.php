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
        $status= "Published";
        $posts = Post::latest()->where('status', "=", $status)->paginate(20);
        return view('home', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function profile()
    {
        $author_id = Auth::user()->id;
        $posts = Post::latest()->where('user_id', "=", $author_id)->paginate(20);
        return view('profile', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function pending()
    {
        $status= "Pending";
        $posts = Post::latest()->where('status', "=", $status)->paginate(20);
        return view('pending', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function closed()
    {
        $status= "Closed";
        $posts = Post::latest()->where('status', "=", $status)->paginate(20);
        return view('closed', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function faq()
    {
        return view('faq');
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Post;
use App\Course;
use App\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Requests\UpdatePostStatusRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return view('posts.index', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses =  Course::get();
        foreach ($courses as $course) {
            $course->description = $course->name;
        }
        return view('posts.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        $post = new Post();
        $post->title = $data["title"];
        $post->detail = $data["detail"];
        $post->category = $data["category"];
        // Attach post to user
        $post->user_id = $request->user()->id;
        // End Attach post to user
        $post->save();

        return redirect()->route('home')->with('success', 'Post created successfully. Currently awaiting for publishing');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $author =  User::find($post->user_id);
        
        return view('posts.show', compact('post', 'author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $courses =  Course::get();
        foreach ($courses as $course) {
            $course->description = $course->name;
        }
        $author =  User::find($post->user_id);
        return view('posts.edit', compact('post', 'author'), compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->title = $data["title"];
        $post->detail = $data["detail"];
        $post->category = $data["category"];
        $post->update();
        return redirect()->route('home')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('profile')->with('success', 'Post deleted successfully');
    }

    public function editStatus(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->title = $data["title"];
        $post->detail = $data["detail"];
        $post->category = $data["category"];
        $post->status = $data["status"];
        $post->published_on = Carbon::now();
        $post->update();
        return redirect()->route('home')->with('success', 'Post updated and published successfully');
    }

    public function publish(UpdatePostStatusRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->status = $data["status"];
        $post->published_on = Carbon::now();
        $post->update();
        return redirect()->route('home')->with('success', 'Post published successfully');
    }
}

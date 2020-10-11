<?php

namespace App\Http\Controllers;

use App\Post;
use App\Course;
use App\User;
use App\Category;

use App\Http\Requests\StorePostRequest;

use Illuminate\Http\Request;

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
        $tags = Category::get();
        foreach ($courses as $course) {
            $course->description = $course->name;
        }
        return view('posts.create', compact('courses','tags'));
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

        //for the pivot table
        $tag=$request->input('tag');
        $categories=Category::where('name','like',"$tag")->get();
        
        foreach($categories as $category){

            $category_id=$category->id;
        }
        $post->category()->attach(1,array('category_id'=>$category_id));

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
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
        return view('posts.edit', compact('post'), compact('courses'));
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
        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
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
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags=Tag::all();
        $title='Tags';
        return view('tags.index')->with('tags',$tags);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {   
        $tag=Tag::where('id',$id)->get();
    }

    public function search(Request $request)
    {
        $query=$request->input('query');
        $tags = Tag::where('name','like',"%$query%")->get(); 
        return view('tags.searchresults')->with('tags',$tags);
    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}

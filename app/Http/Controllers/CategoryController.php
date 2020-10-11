<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $title='Categories';
        return view('categories.index')->with('categories',$categories);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        return Category::find($id);
    }

    public function search(Request $request)
    {
        $query=$request->input('query');
        $categories = Category::where('name','like',"%$query%")->get(); 
        return view('categories.searchresults')->with('categories',$categories);
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

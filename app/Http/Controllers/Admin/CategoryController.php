<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index',compact('categories'));
    }

    public function create()
    {
        $subCats = Category::where(['parent_id' => 0])->get();
        return view('backend.category.create',compact('subCats'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->status = $request->status;
        $category->save();
        Session::flash('success','Category Added Successfully !');
        return back();
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

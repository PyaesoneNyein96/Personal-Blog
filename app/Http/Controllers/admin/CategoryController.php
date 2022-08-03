<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        $categories = Category::latest()->paginate(10);
      return view('admin-panel.categories.index-categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-panel.categories.create-categories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories',
        ] );
        Category::create([
            'name'=>$request->name,
        ]);


        return redirect()->route('Categories.store')->with('info'," \"$request->name\" is sussefully Created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryEdit = Category::find($id);
        return view('admin-panel.categories.edit-category',compact('categoryEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateCategory = Category::find($id);
        $request->validate([
            'name'=>'required'
        ]);
        category::find($id)->update([
            'name' =>request()->name,
        ]);
        return redirect()->route('Categories.index')->with('info', "\"$updateCategory->name\" has been Successed Edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCategory = Category::find($id);
        // dd($deleteCategory->name);
        Category::find($id)->delete();

        // return redirect()->route('Categories.index')->with('info'," \"$delsms->name\"Category has been deleted! ");
        return redirect()->back()->with('info', " \"$deleteCategory->name\" Category has been Deleted!");
    }


}

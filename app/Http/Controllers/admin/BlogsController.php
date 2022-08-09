<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
// use Illuminate\Support\Facades\File;
use File;
use Auth;
// use Illuminate\Routing\ResourceRegistrar ;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::all();
        $blogs= Blog::latest()->paginate(6);
        // $blogs= Blog::all();
        return view('admin-panel.blogs.index-blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin-panel.blogs.create-blogs',compact('categories'));
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
            'title'       =>'required',
            'category_id' =>'required',
            'image'       =>'required|image|mimes:png,jpg,jpeg',
            'content'     =>'required',
            'user_id' => 'required',
        ]);
        $image = request()->image;
        $imageName = uniqid().'-'.$image->getClientOriginalName();
        $image->StoreAs('public/blogs-img',$imageName);

        Blog::create([
            'title' =>request()->title,
            'category_id'=>request()->category_id,
            'image' =>$imageName,
            'content'=>request()->content,
            'user_id' =>Auth::user()->id,
        ]);
        return redirect()->route('blogs.index')->with('info','Blogs Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commentBlogDetail = Blog::find($id);

        return view('admin-panel.blogs.blog-comment',compact('commentBlogDetail'));
        // dd($commentDetail->comments);
    }
    // public function commentHide($id){
    //     $hideCmt = Blog::find($id);
    //     dd($hideCmt);
    //     return view('admin-panel.blogs.blog-comment',compact('hideCmt'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editBlog = Blog::find($id);
        $categories = Category::all();
        return view('admin-panel.blogs.edit-blog',[
            'editBlog' => $editBlog,
            'categories' => $categories,
        ]);
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

        $Blogs = Blog::find($id);


       $data = $request->validate([
            'title'=>'required',
            'image'=>'nullable|image|mimes:png,jpg',
            'category_id'=>'required',
            'content'=>'required',

        ]);

        if($request->hasFile('image'))
        {
            $blogimage = $Blogs->image;
            File::delete("storage/blogs-img/$blogimage");

            $image = $request->image;
            $imageName = uniqid().'-'.$image->getClientOriginalName();
            $image->StoreAs('public/blogs-img',$imageName);

            $data['image'] = $imageName;

        }
        $Blogs->update($data);

        return redirect()->route('blogs.index')->with('info','susccessfully updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $delBlogs = Blog::find($id);
            Blog::find($id)->delete();
            $delimage = $delBlogs->image;
            File::delete("storage/blogs-img/$delimage");

            return back()->with('info'," \"$delBlogs->title \" has been successfully Deleted! ");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Category;
use App\Models\Blog;
use App\Models\React;
use App\Models\Comment;
use App\Models\User;
use Auth;
// use Illuminate\Support\Facades\Gate;





class UiController extends Controller
{
    public function index() {
        $skills = Skill::all();
        $projects = Project::Paginate(3);
        $Blogs = Blog::latest()->take(3)->get();
        $moreBlogs = Blog::latest()->paginate(4);
        $profileUser = User::where('name','psn')->first();
        return view('ui.index',compact('skills','projects','Blogs','moreBlogs','profileUser'));
    }

    public function indexBlogs(){
        $categories = Category::all();
        $Blogs = Blog::latest()->paginate(6);

        return view( 'ui.blogs',compact('categories','Blogs'));
    }

    public function Blogdetail($id){

        $detailBlog = Blog::find($id);
        $detailBlogCmt = Comment::where('blog_id',$id)->where('status','show')->get();
        $Likereact = React::where('blog_id',$detailBlog->id)->where('type','like')->get();

        $Dislikereact = React::where('blog_id',$detailBlog->id)->where('type','dislike')->get();

        if(Auth::check()){
            $likeStatus = React::where('blog_id',$detailBlog->id)->where('user_id',Auth::user()->id)->first();
            return view('ui.blog-detail',compact('detailBlogCmt','detailBlog','Likereact','Dislikereact','likeStatus'));
        }
        return view('ui.blog-detail',compact('detailBlogCmt','Likereact','Dislikereact','detailBlog'));

    }

    public function Search(Request $request){
        $search = "%$request->searchItem%";
        $categories = Category::all();
        $category = Category::where('name','=',$search)->get();

        $Blogs = Blog::where('title' ,'like',"%$search%")->orwhere('content','like',"%$search%")->
        orwhereHas('category',function($elequentModel) use($search){
            $elequentModel->where('name','like',"%$search%");})->paginate(10);

        return view('ui.blogs',compact('Blogs','categories' ));
    }

    public function searchByCategory($id){
        $categories = Category::all();
        $Blogs = Blog::where('category_id',$id)->paginate(10);
        // dd($Blogs);

        return view('ui.blogs',compact('Blogs','categories'));
    }

}



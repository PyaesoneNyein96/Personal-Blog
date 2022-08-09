<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use File;


// use Illuminate\Support\Facades\Gate;


class AdminDashboardController extends Controller
{




    public function index(){
        $adminUser = User::where('status','admin')->get();
        return view('admin-panel.dashboard',compact('adminUser'));
    }





    public function AdminEdit($id){
       $adminuser = user::find($id);
        return view('admin-panel.admin-edit',compact('adminuser'));
    }



    public function updateAdmin(Request $request,$id){
        $userupdate = User::find($id);


       $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'status' => 'required',
            'image' => 'nullable|image|mimes:png,jpg',
            'age'=>'nullable',
            'content'=>'nullable',
            'phone'=>'nullable',
            'socialurl'=>'nullable',
        ]);

      if($request->hasFile('image'))
      {
        $oldimg = $userupdate->image;
        File::delete("storage/profile-img/$oldimg");

        $recentImg = $request->image;
        $OrImg = uniqid().'-'.$recentImg->getClientOriginalName();
        $recentImg->StoreAs('public/profile-img',$OrImg);

        $validateData['image'] = $OrImg;
      }

        $userupdate->update($validateData);

        return redirect('admin/dashboard');
    }

    public function deleteAdmin($id){
        $infoValue = User::find($id);
        $deluser = User::find($id);
        $deluser->delete();

        return back()->with('info', "Admin  user \"$infoValue->name\"  has been deleted");
    }


    public function adminBlogs($id){

        $blogs = Blog::where('user_id',$id)->paginate(6);
        return view('admin-panel.blogs.index-blog',compact('blogs'));

    }



}

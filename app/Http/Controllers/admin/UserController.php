<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;

class UserController extends Controller
{

    public function index(){
        // $userdata = User::all();
        $userdata = User::paginate(10);
            return view('admin-panel.users.index-user')->with('userdata',$userdata);
    }

    public function edit($id){
        $editData = User::find($id);
        return view('admin-panel.users.edit-user',[
            'editData' => $editData,
        ]);
    }



    public function update(Request $request, $id){

        $validator = validator($request->all(),[
            'name'  =>'required',
            'email' =>'required',
            'status'=>'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $update = user::find($id);
        $update->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'status' =>$request->status,
        ]);
        return redirect('admin/users')->with('info','Successfully Updated');
    }



    public function delete($id){

        $delete = User::find($id);
        $delete->delete();



        return back()->with('info', "User $delete->name and all of his Blogs have been deleted !");
    }

}

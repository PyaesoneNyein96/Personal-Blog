<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // public function index() {
    //     $userdata = User::all();
    //     return view('admin-panel.users.index',[
    //         'userdata' => $userdata,
    //     ]);
    // }
    public function index(){
        $userdata = User::all();
            return view('admin-panel.users.index')->with('userdata',$userdata);
            return view('admin-panel.users.edit')->with('userdata',$userdata);

    }

    public function edit($id){
        $editData = User::find($id);
        // return "something-{$id}";
        return view('admin-panel.users.edit',[
            'editData' => $editData
        ]);
    }

    // public function update($id){
    //     $update = User::find($id);
    //     $update->update([
    //         'name'  => $request->name,
    //         'email' => $request->email,
    //         'status'=> $request->status,
    //     ]);
    // }

    // public function update($id){
    //     $update = User::find($id);
    //     $update->name = request()->name;
    //     $update->email = request()->email;
    //     $update->status= request()->status;
    //     // $update->password = request()->password;
    //     $update->update();

    //     return redirect('admin/users');
    // }



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
        return redirect('admin/users')->with('info','Update Successfully');
    }



    public function delete($id){
        $delete = user::find($id);
        $delete->delete();

        return back()->with('info', "\"$delete->name\" has been deleted");
        // return back()->with('del-info', "\"$delete->name\" has been deleted");
    }

}

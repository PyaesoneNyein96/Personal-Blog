<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(4);
        return view('admin-panel.Projects.index-project',compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-panel.Projects.create-project');


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
        'name' =>'required',
        'url'  =>'required',
      ]);
      Project::create([
        'name'=>$request->name,
        'url' =>$request->url,
      ]);
      return redirect()->route('projects.index')->with('info',"Your Project \"$request->name\" is added!");
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
        // dd("hello-$id");
        $editProject = Project::find($id);
        return view('admin-panel.Projects.edit-project',compact('editProject'));
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
        $updateProjectInfo = Project::find($id);
        $beforeUpdate = Project::find($id);
        $request->validate([
            'name'=>'required',
            'url'=>'required',
        ]);
        $updateProjectInfo->update([
            'name'=>request()->name,
            'url'=>request()->url,
        ]);

        return redirect()->route('projects.index')->with('info',"Successfully Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Project::find($id);
        $DelSMS = Project::find($id);
        $delete->delete();


        return redirect()->back()->with('info',"Your Project \"$DelSMS->name\" has been Deleted !");
    }
}

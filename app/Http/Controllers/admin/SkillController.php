<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skillData = Skill::paginate(5);
        return view('admin-panel.skill.index',compact('skillData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-panel.skill.create-skill');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(),[
            'name' =>'required',
            'percent'=>'required',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

       Skill::create([
        'name'=>$request->name,
        'percent' =>$request->percent,
       ]);
       return redirect('admin/skills')->with('info', " \"$request->name\" Skill have added !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "this is what u want $id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editSkill = Skill::find($id);
        return view('admin-panel.skill.edit-skill',[
            'editskill' => $editSkill
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
       $beforeSkill = Skill::find($id);

       $updateSkill = Skill::find($id);
       request()->validate([
        'name'=>'required',
        'percent'=>'required',
       ]);
       $updateSkill->update([
        'name'=>request()->name,
        'percent'=>request()->percent,
       ]);

      return redirect('/admin/skills')->with('info',"Your Skill
       \"$updateSkill->name\" was Updated from skill level \"$beforeSkill->percent\" to \"$updateSkill->percent\" !");

        // $dkillUpdate = Skill::
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteSkill = Skill::find($id);
        $deleteSkill->delete();

        return redirect('admin/skills');
        return back();
    }
}

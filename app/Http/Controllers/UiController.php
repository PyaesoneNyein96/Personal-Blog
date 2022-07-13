<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;

class UiController extends Controller
{
    public function index() {
        $skills = Skill::all();
        $projects = Project::paginate(4);
        return view('ui.index',compact('skills','projects'));
    }

    public function indexBlogs(){
        return view('ui.blogs');
    }

}



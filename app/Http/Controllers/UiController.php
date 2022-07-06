<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class UiController extends Controller
{
    public function index() {
        $skills = Skill::all();
        // return $skills;
        return view('ui.index',compact('skills'));
    }


    // public function __construct(){
    //     $this->middleware('auth')->except('index');
    // }
}



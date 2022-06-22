<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function index() {
        return view('ui.index');
    }


    // public function __construct(){
    //     $this->middleware('auth')->except('index');
    // }
}



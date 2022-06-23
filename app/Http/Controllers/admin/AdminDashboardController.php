<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Gate;


class AdminDashboardController extends Controller
{

// [
//     public function index(){
//         if(Gate::allows('auth-user')){
//             return view('admin-panel.dsahboard');
//         }else{
//             return view('ui.index');
//         }
//     }
// ]


    public function index(){
        return view('admin-panel.dashboard');
    }

    // public function __construct(){
    //     $this->middleware(['auth','isAdmin']);
    // }
}

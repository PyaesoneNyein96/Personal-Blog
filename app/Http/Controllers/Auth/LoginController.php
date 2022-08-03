<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // (({{Customize Closed ^^^}}))


    // protected function authenticated(){
    //     if(Auth::user()->status == 'admin'){
    //         return redirect('/admin');
    //     }else{
    //         return redirect('/');
    //     }

    // }

    public function showLoginForm(){
        $previousURL = url()->previous();
        $baseURL = url()->to('/');
        if
        // ($previousURL !== $baseURL.'/login')
            ($previousURL !== "http://localhost:8000/login")
        {
            session()->put('url.intended',$previousURL);
        }
            return view('auth.login');



    }

    protected function authenticated(){
        if(Gate::allows('auth-user')){
            return redirect('admin/dashboard');
        }else{
            // return redirect('/');
           $this->showLoginForm();
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

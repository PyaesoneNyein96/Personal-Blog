<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\React ;
use Auth;

class ReactController extends Controller
{
    public function like($blog_id){


            $isExist = React::where('blog_id','=', $blog_id)->where('user_id','=', Auth::user()->id)->first();

            if($isExist &&  $isExist->type == 'like'){

                $ids = $isExist->id;
                $updateReact = React::find($ids);
                $updateReact->update( ['type'=>'dislike']);
                return back()->with('info','dislike');

            }else if($isExist && $isExist->type == 'dislike'){


                $ids = $isExist->id;
                $updateReact = React::find($ids);
                $updateReact->update( ['type'=>'like']);
                return back()->with('info','like');

                }else{
                    react::create([
                        'blog_id' => $blog_id,
                        'user_id' => Auth::user()->id,
                        'type' => 'like',
                    ]);



                    return back()->with('info','like');
                }


    }

}

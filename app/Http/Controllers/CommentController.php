<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Blog;
use Auth;

class CommentController extends Controller
{
    public function createComment(Request $request){

        if(!Auth::check()){
            return redirect()->route('login');
        }

        request()->validate([
            'content' => 'required',
        ]);
    //   $comment = Comment::create([
    //     'blog_id' =>request()->blog_id,
    //     'user_id' =>Auth::user()->id,
    //     'content' =>request()->content,
    //   ]);

        $comment = new Comment;
        $comment->blog_id = request()->blog_id;
        $comment->user_id = Auth::user()->id;
        $comment->content = $request->content;
        $comment->save();
      return back();
    }

    public function deleteComment($id){
        $delComment = Comment::find($id);
        $delComment->delete();
        return back();
    }

    public function commentHide($id){
        $hideCmt = Comment::findorFail($id);

      $result = $hideCmt->status == 'show' ? 'hide' : 'show';

      $hideCmt->update([
        'status' => $result
      ]);
        return back()->with('info', 'Comment status changed successfully!');
    }


}

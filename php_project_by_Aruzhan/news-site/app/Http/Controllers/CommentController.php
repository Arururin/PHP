<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function show(){
        return Comment::get();
    }

    public function showByUserId(Request $request){
        $userComment = Comment::where("userId", $request->userId)->first();
        return $userComment;
    }

    public function showByNewsId(Request $request){
        $newsComments = Comment::where("newsId", $request->newsId)->get();
        return $newsComments;
    }

    public function post (Request $request){
        $comment = new Comment();

        $comment->User()->userId = $request->userId;
        $comment->Game()->newsId = $request->newsId;
        $comment->text =  $request->comment;
        $comment->save();
        return $comment;
    }

    public function delete(Request $request){
        $comment = Comment::find($request->id);
        $comment->delete();
        return "Deleted";
    }
}

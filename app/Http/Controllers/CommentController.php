<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    // public function commentIndex(){
    //     $comment = Comment::query()->get();
    //     // dd($comment);
    //     return view('service', compact('comment'));
    // }
    
    // public function comment(CommentRequest $request){
    //     $validated = $request->validated();
        
    //     $comment = Comment::query()->create($validated);
    //     return redirect()->route('service');
    // } 
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use Input,Redirect;
class CommentsController extends Controller
{
    public function store(){
        if(Comment::create(Input::all())){
            return Redirect::back();
        }else{
            return Redirect::back()->withInput()->withErrors('评论发表失败');
        }
    }
}

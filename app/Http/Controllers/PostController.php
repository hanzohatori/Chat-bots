<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Works;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function ViewPosts(){
        $isNews = Works::where('works_category_id',1)->get();
        return view('news',compact('isNews'));
    }


}

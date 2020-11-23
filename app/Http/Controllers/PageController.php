<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Works;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Main()
    {
        $isWork = Works::get();
        return view('index',compact('isWork'));
    }
    public function About()
    {
        return view('about-us');
    }
    public function Works(){
        return view('work');
    }
    public function Blog()
    {
        $blogs = Blog::with('category')->get();
        $blogNews = Blog::where('blog_category_id',1);
        $blogArticle = Blog::where('blog_category_id',2);
        $blogJob = Blog::where('blog_category_id',3);
        return view('blog', compact('blogs','blogNews', 'blogArticle', 'blogJob'));
    }
    public function Contacts()
    {
        return view('contacts');
    }
}

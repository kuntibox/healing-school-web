<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy("created_at","desc")->paginate(3);
        return view("welcome", ['blogs' => $blogs]);
    }

    function blogs(Request $request) {
        $blogs = is_null($request->c) ?  

            Blog::orderBy("created_at","desc")->paginate(12) :

            Blog::whereHas('category', function ($query) use( $request ) {
                return $query->where('id', '=', $request->c);
            })->orderBy('created_at','desc')->paginate(3);
        
        return view("blog.index", ['blogs' => $blogs, 'category'=> Category::find($request->c)]);
    }
}

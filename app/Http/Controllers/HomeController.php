<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy("created_at","desc")->paginate(3);
        return view("welcome", ['blogs' => $blogs]);
    }
}

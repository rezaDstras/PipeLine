<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\QueryFilters\Active;
use App\QueryFilters\Sort;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index()
    {
        #Regular

//        $posts=Post::query();
//        if (request()->has('active')){
//            $posts ->where('active',request('active'));
//        }
//        if (request()->has('sort')){
//            $posts ->orderBy('title',request('sort'));
//        }
//      $posts =  $posts->get();

        #PipeLine

        $posts=Post::postAll();



        return view('post.index',compact('posts'));
    }
}

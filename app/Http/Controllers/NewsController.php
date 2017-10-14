<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Category;

//use App\Http\Requests;

class NewsController extends Controller
{
     public function index(){
        $categories = Category::select('id', 'name') -> get();
        $news = News::select('id', 'title', 'date', 'short_content', 'preview') -> get();
        return view('news/index')->with(['news' => $news, 'categories' => $categories]);
    }
    
     public function show($id){
        $article = News::select('id', 'title', 'date', 'content', 'preview')->where('id', $id)->first();
        $categories = Category::select('id', 'name') -> get();
        return view('news/view')->with(['article' => $article, 'categories' => $categories]);
    }
    
     public function showCategory($id){
        $categories = Category::select('id', 'name') -> get();
        $news = News::select('id', 'title', 'date', 'short_content', 'preview') -> where('category_id', $id) -> get();
        return view('news/index')->with(['news' => $news, 'categories' => $categories]);
    }
}

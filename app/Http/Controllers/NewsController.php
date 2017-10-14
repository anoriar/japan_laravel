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
        $news = News::select('id', 'title', 'date', 'short_content') -> get();
        return view('news/index')->with(['news' => $news, 'categories' => $categories]);
    }
}

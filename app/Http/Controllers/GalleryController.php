<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

#use App\Http\Requests;
use App\Gallery;

class GalleryController extends Controller
{
     public function index(){
        $images = Gallery::select('id', 'image')->get();
        return view('gallery/index')->with(['images' => $images]);
    }
}

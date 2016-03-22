<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Gallery;

class GalleryController extends Controller
{
    //
    public function index(){
      $galleries = Gallery::all();
      return view('frontend.gallery',[
        'galleries' => $galleries,
      ]);
    }

    public function show($id){
      $gallery = Gallery::where('id',$id)->first();
      return view('frontend.gallery-detail',[
        'gallery' => $gallery,
      ]);
    }
}

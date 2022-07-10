<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $request){
        // dd($request);
        $title=$request->title;
        $desc=$request->desc;

        // return $request->path();
        // return $request->method();
        // return $request->method();
        // return $request->url();
        // return $request->bearerToken();
        // return $request->ip();

        return $title.$desc;



    }
}

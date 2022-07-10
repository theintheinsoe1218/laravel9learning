<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function store(Request $request){
        // dd($request);
        // $validate = $request->validate([
        //     'title' => 'required|min:3|max:20',
        //     'desc' => 'nullable|min:3'
        // ]);
        $validate=Validator::make($request->all(),[
            'title'=>'required|max:200|min:3',
            'desc'=>'nullable|min:3'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate)->withInput();
        }
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

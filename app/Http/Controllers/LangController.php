<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function show(){
        if(session()->has('lang')){
            return session('lang');
        }else{
            return "There is no way";
        }
    }

    public function store(){
        session(['lang'=>'en']);
        return "English language is stored";
    }

    public function delete(){
        session()->forget('lang');
        return "session deleted";
    }

    public function change(){
        session(['lang'=>'mm']);
        return "Myanmar language is stored";
    }
}

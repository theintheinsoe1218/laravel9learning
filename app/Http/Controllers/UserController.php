<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index(){
        $name="Thein Thein Soe";
        $car=[
            'name'=>"BMW",
            'price'=>200,
            'color'=>'red'


        ];
        // return view('users.index',['name'=>$name,'car'=>$car]);

        return View::make('users.index',['name'=>$name,'car'=>$car]);
    }

    public function show($name){
        return "User - $name";
    }
}

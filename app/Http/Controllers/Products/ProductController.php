<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $name;
    public function __construct()
    {
        $this->name="Thein Thein Soe";
    }

    public function index(){
        return $this->name;
    }
}

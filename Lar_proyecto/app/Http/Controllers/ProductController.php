<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProducts(){
        return view("products");
    }

    public function details(){
        return view("details");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(){
        return view('course.index');
    }

    public function course(){
        return view('course.show');
    }
}

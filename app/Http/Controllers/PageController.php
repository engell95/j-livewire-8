<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(){
        return view('course.index');
    }

    public function course(Course $course){
        return view('course.show',compact('course'));
    }
}

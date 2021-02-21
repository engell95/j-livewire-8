<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseList extends Component
{
    public function render()
    {
        $Course = Course::latest()->with('user')->take(9)->get();
        return view('livewire.course-list',['Course' => $Course]);
    }
}

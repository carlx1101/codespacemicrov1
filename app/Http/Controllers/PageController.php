<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function welcome()
    {
        // Get the 6 latest courses
        $latestCourses = Course::where('status', 'Published')
        ->latest()
        ->take(6)
        ->get();
        return view('guest.welcome', compact('latestCourses'));
    }

    
    public function courseOverview($id)
    {
        $course = Course::find($id);

        if (!$course) {
            // Handle the case where the course is not found
            return abort(404);
        }
        // dd($course->sections);

        $totalLessonCount = $course->sections->flatMap(function ($section) {
            return $section->lessons;
        })->count();


        $cartItem = Cart::where('course_id', $course->id)
        ->where('student_id', auth()->user()->id)
        ->first();


        $studentId = Auth::id();
        $cartItems = Cart::where('student_id', $studentId)->get();

        
        return view('guest.course-overview', ['course' => $course,'totalLessonCount' => $totalLessonCount, 'cartItem' =>  $cartItem, 'cartItems' => $cartItems]);

    }

    public function blog(){
        
    }

}

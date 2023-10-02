<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

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


        return view('guest.course-overview', ['course' => $course,'totalLessonCount' => $totalLessonCount]);

    }

}

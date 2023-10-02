<?php

namespace App\Http\Controllers\Course;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    public function index(Request $request, $courseId)
    {
        // Retrieve the course by ID
        $course = Course::findOrFail($courseId);

        // Get the sections associated with the course
        $sections = $course->sections;
        return view('school.course.curriculum', compact('course', 'sections'));
    }

    public function store(Request $request,$courseId )
    {
            
        $section = new Section([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        
        ]);

        // Assuming you have a form input field for course_id, you can associate the section with the course
        $courseId = $courseId;
        $course = Course::findOrFail($courseId);
        $course->sections()->save($section);

        return redirect()->route('sections.index', ['courseId' => $courseId])->with('success', 'Section created successfully');
    }
}

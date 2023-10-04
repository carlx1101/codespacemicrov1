<?php

namespace App\Http\Controllers\Course;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Show a list of all courses
        $courses = Course::all();
        return view('school.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('school.course.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'subcategory' => 'nullable|string|max:255',
            'photo_path.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Check each item within the array
            'promo_video_path.*' => 'nullable|file|mimes:mp4,mov,avi|max:20480', // Check each item within the array for video files (adjust max size as needed)
            'learning_objectives' => 'nullable|array',
            'prerequisites' => 'nullable|array',
            'target_audiences' => 'nullable|array',
            'price' => 'nullable|numeric|min:0',
            'currency' => 'nullable|string|max:255',
            'welcome_message' => 'nullable|string',
            'congratulations_message' => 'nullable|string',

        ]);

        $learningObjectives = json_encode($request->input('learning_objectives'));
        $prerequisites = json_encode($request->input('prerequisites'));
        $targetAudiences = json_encode($request->input('target_audiences'));
      
        $course = new Course();
        $course->title = $request->input('title');
        $course->subtitle = $request->input('subtitle');
        $course->description = $request->input('description');
        $course->category = $request->input('category');
        $course->subcategory = $request->input('subcategory');        
        $course->promo_video_path = $request->input('promo_video_path');
        $course->learning_objectives = $learningObjectives; // Assign the JSON string
        $course->prerequisites = $prerequisites; // Assign the JSON string
        $course->target_audiences = $targetAudiences; // Assign the JSON string
        $course->price = $request->input('price');
        $course->discounted_price = $request->input('discounted_price');
        $course->currency = $request->input('currency');
        $course->welcome_message = $request->input('welcome_message');
        $course->congratulations_message = $request->input('congratulations_message');
        $course->status = 'Unpublish';

        $course->save();

        $photoPaths = []; // Store the paths of uploaded photos

        if ($request->hasFile('photo_path')) {
            foreach ($request->file('photo_path') as $photo) {
                // Generate a unique filename
                $filename = uniqid('photo_') . '.' . $photo->getClientOriginalExtension();
        
                // Store the file in the storage/app/public/course_photos directory
                $path = $photo->storeAs('public/course_photos', $filename);
        
                // Remove 'public/' from the path for storage in the database
                $path = str_replace('public/', '', $path);
        
                // Add the stored path to the array
                $photoPaths[] = $path;
            }
        }


        // ...

        $promoVideoPaths = []; // Store the paths of uploaded promo videos

        // Check if 'promo_video_path' has files
        if ($request->hasFile('promo_video_path')) {
            foreach ($request->file('promo_video_path') as $promoVideo) {
                // Generate a unique filename
                $filename = uniqid('promo_video_') . '.' . $promoVideo->getClientOriginalExtension();

                // Store the file in the storage/app/public/promo_videos directory
                $path = $promoVideo->storeAs('public/promo_videos', $filename);

                // Remove 'public/' from the path for storage in the database
                $path = str_replace('public/', '', $path);

                // Add the stored path to the array
                $promoVideoPaths[] = $path;
            }
        }

        // Attach photo paths to the course
        $course->photo_path = json_encode($photoPaths);
        $course->save();

        $course->promo_video_path = json_encode($promoVideoPaths);
        $course->save();



        return redirect()->route('courses.index')->with('success','Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
                // Find the course by its ID
        $course = Course::find($id);

        if (!$course) {
            // Handle the case where the course does not exist
            return response()->json(['message' => 'Course not found'], 404);
        }

        // Delete associated photos
        $photoPaths = json_decode($course->photo_path);
        foreach ($photoPaths as $path) {
            // Delete the file from storage
            Storage::delete('public/' . $path);
        }

        // Delete associated promo videos
        $promoVideoPaths = json_decode($course->promo_video_path);
        foreach ($promoVideoPaths as $path) {
            // Delete the file from storage
            Storage::delete('public/' . $path);
        }

        // Delete the course record from the database
        $course->delete();

        return response()->json(['message' => 'Course deleted successfully'], 200);
    }

    public function updateStatus($id)
    {
        // Retrieve the course based on the provided ID
        $course = Course::findOrFail($id);

        // Toggle the course status
        if ($course->status === 'Published') {
            $course->status = 'Unpublished';
        } else {
            $course->status = 'Published';
        }

        $course->save();

        // Redirect back to the previous page or wherever you want
        return redirect()->back()->with('success', 'Course status updated successfully');
    }
    
}

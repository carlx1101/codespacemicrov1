<?php

namespace App\Http\Controllers\Course;

use App\Models\Video;
use App\Models\Lesson;
use App\Models\Article;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function store(Request $request, Section $section)
    {
       
        // Create a new Lesson
        $lesson = new Lesson([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'lesson_type' => $request->input('lesson_type'),
            'is_preview' => $request->input('is_preview'),
        ]);
    
        // Save the Lesson to the section
        $section->lessons()->save($lesson);
    
        // Check the lesson type
        $lessonType = $request->input('lesson_type'); // Assuming you have a 'type' field in your form
    
        if ($lessonType === 'video') {
            // If the lesson type is "video," create a video record
            $video = new Video([
                'video_url' => $request->input('video_url'), // Assuming you have a 'video_url' field in your form
            ]);
            // Associate the video with the lesson
            $lesson->video()->save($video);


        } elseif ($lessonType === 'article') {
            // If the lesson type is "article," create an article record
            $article = new Article([
                'content' => $request->input('article_content'), // Assuming you have an 'article_content' field in your form
            ]);
    
            // Associate the article with the lesson
            $lesson->article()->save($article);
        }
    
        return redirect()->back();
    }
}

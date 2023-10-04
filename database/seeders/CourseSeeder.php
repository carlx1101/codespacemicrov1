<?php

namespace Database\Seeders;

use App\Models\Video;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Introduction to PHP',
            'subtitle' => 'PHP is a widely-used, server-side scripting language for web development, known for its versatility, ease of use, and robust community support.            ',
            'description' => null,
            'category' => 'IT & Software',
            'subcategory' => 'Programming',
            'photo_path' => '["course_photos\/photo_651231025dd32.png"]',
            'promo_video_path' => '["promo_videos\/promo_video_65123102605aa.mp4"]',
            'learning_objectives' => '["Build dynamic websites with PHP.","Create and manipulate databases using MySQL.","Develop web applications with user authentication.","Understand PHP security best practices.","Employ popular PHP frameworks.","Deploy PHP applications to web servers."]',
            'prerequisites' => '["Basic HTML and CSS knowledge.","Familiarity with programming concepts.","A text editor for coding.",null]',
            'target_audiences' => '["Web developers seeking server-side scripting skills.","Programmers interested in web application development.","Students pursuing web development careers."]',
            'price' => '98.00',
            'currency' => 'USD',
            'welcome_message' => null,
            'congratulations_message' => null,
            'status' => 'Published',
      
        ]);

        $course = Course::where('title', 'Introduction to PHP')->first();

        if ($course) {
            // Create sections associated with the course
            $section1 = Section::create([
                'course_id' => $course->id,
                'title' => 'Getting Started with PHP',
                'description' => 'An introduction to PHP basics.',
            ]);

            // Create lessons for the first section
            $lesson1 = Lesson::create([
                'section_id' => $section1->id,
                'title' => 'Installing PHP',
                'description' => 'This lesson covers how to install PHP on your system.',
                'lesson_type' => 'video',
                'is_preview' => 'checked',
                
            ]);

            Video::create([
                'lesson_id' => $lesson1->id,
                'video_url' => 'https://www.youtube.com/watch?v=IlV58h-7nKY&list=RDma7r2HGqwXs&index=13',
            ]);
   

            // Create another section with its lessons
            $section2 = Section::create([
                'course_id' => $course->id,
                'title' => 'Variables and Data Types',
                'description' => 'Learn about variables and data types in PHP.',
            ]);

            $lesson2 = Lesson::create([
                'section_id' => $section2->id,
                'title' => 'Variables in PHP',
                'description' => 'An introduction to variables in PHP.',
                'lesson_type' => 'video',
                'is_preview' => 'checked',


            ]);

            Video::create([
                'lesson_id' => $lesson2->id,
                'video_url' => 'https://www.youtube.com/watch?v=IlV58h-7nKY&list=RDma7r2HGqwXs&index=13',
            ]);
   



        }


        
    }
}
